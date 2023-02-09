# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://docs.scrapy.org/en/latest/topics/item-pipeline.html


# useful for handling different item types with a single interface
from itemadapter import ItemAdapter
import pymysql 




class NkunewsPipeline:
    def process_item(self, item, spider):


        con =pymysql.connect(host="127.0.0.1",user="duoduo",password="20020701",db="phpmyadmin",port=3306,charset="utf8")
        cur=con.cursor()
        sql=("insert into weapons_company3(E_name,url,C_name)""values(%s,%s,%s)")

        list=[item['NewsTitle'],item['NewsUrl'],item['NewsTime']]

        try:
            cur.execute(sql,list)
        except Exception as e:
            print('Insert error',e)
            con.rollback()

        else:
            con.commit()

        cur.close()
        con.close()

        return item
