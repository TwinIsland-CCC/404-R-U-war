import pymysql
import requests
import os

name = 'nytimes'
allowed_domains = ['www.nytimes.com']
start_urls = ['https://www.nytimes.com/news-event/ukraine-russia']


def main():
    db = pymysql.connect(host='localhost', user='root', password='qmk2147483647', db='ru_war', port=3306)
    # 使用cursor()方法获取操作游标
    cursor = db.cursor()
    cursor.execute("select * from weapons_company3")
    ret = cursor.fetchall()
    for r in ret:
        E_name = r[0]
        url = r[1]
        country = str.split(r[1], '/')[0]
        C_name = r[2]
        if E_name is not '':
            try:
                sql = "INSERT INTO weapons_company VALUES ('%s', '%s', '%s', '%s', -1)" % (
                    E_name, url, country, C_name)
                cursor.execute(sql)
                db.commit()
            except db.ProgrammingError as e:
                print(e)
                db.rollback()
        else:
            print('E_name is null ,skip!')
    print(ret)


main()

# i = 1
# print(divList)
# for div in divList:
#
#     if title is not None:
#         img = div.xpath('./div/div[1]/a/div[1]/figure/div/img/@src').extract_first()
#         img_set = div.xpath('./div/div[1]/a/div[1]/figure/div/img/@srcset').extract_first()
#         img_set = img_set.__str__().split(',')
#
#         img_title = title.translate({ord(i): None for i in '\\/:*?\"<>|'})  # windows中文件名不能含有这些字符
#         if 1:
#             path = os.getcwd()
#             img_path = path + '\\img\\%s' % img_title
#             print(img_path)
#             # os.mkdir(img_path)
#             for i in range(len(img_set)):  # 下载图片
#                 img_url = img_set[i].__str__().split(' ')[0]
#                 img_set[i] = img_url
#                 print(img_set[i])
#                 res = requests.get(img_set[i],
#                                    proxies={'http': 'http://127.0.0.1:7890', 'https': 'http://127.0.0.1:7890'})
#                 with open('%s\\%s-%s.jpg' % (img_path, img_title, i), 'wb') as f:
#                     f.write(res.content)
#             print(img)
#             print(img_set)
#             try:
#                 sql = "INSERT INTO ru_news(title, url, author, date, description, img_path)VALUES ('%s', '%s', '%s', '%s', '%s', '%s')" % (
#                     title, url, author, date, description, img_title)
#                 cursor.execute(sql)
#                 db.commit()
#             except db.ProgrammingError as e:
#                 print(e)
#                 db.rollback()
#         else:
#             print("dir %s is exist!" % title)
#
#         item = MyspiderItem(title=title, url=url, author=author, date=date, description=description)
#
#     else:
#         print('title is none')
