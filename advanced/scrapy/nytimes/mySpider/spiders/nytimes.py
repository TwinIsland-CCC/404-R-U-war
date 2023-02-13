import pymysql
import scrapy
import requests
import os

from mySpider.items import MyspiderItem


class NytimesSpider(scrapy.Spider):
    name = 'nytimes'
    allowed_domains = ['www.nytimes.com']
    start_urls = ['https://www.nytimes.com/news-event/ukraine-russia']

    # entry point for the spider
    def parse(self, response):
        db = pymysql.connect(host='localhost', user='root', password='', db='ru_war', port=3306)
        # 使用cursor()方法获取操作游标
        cursor = db.cursor()
        divList = response.xpath('//*[@id="stream-panel"]/div[1]/ol/*')
        i = 1
        print(divList)
        for div in divList:
            print(div, div.xpath('.').extract_first())
            title = div.xpath('./div/div[1]/a/h2/text()').extract_first()
            url = div.xpath('./div/div[1]/a/@href').extract_first()
            author = div.xpath('./div/div[1]/a/div[2]/p/span/text()').extract_first()
            date = div.xpath('./div/div[2]/span/text()').extract_first()
            description = div.xpath('./div/div[1]/a/p/text()').extract_first()

            if title is not None:
                img = div.xpath('./div/div[1]/a/div[1]/figure/div/img/@src').extract_first()
                img_set = div.xpath('./div/div[1]/a/div[1]/figure/div/img/@srcset').extract_first()
                img_set = img_set.__str__().split(',')

                img_title = title.translate({ord(i): None for i in '\\/:*?\"<>|'})  # windows中文件名不能含有这些字符
                if not os.path.exists('img\\%s' % img_title):
                    path = os.getcwd()
                    img_path = path + '\\%s' % img_title
                    os.mkdir(img_path)
                    for i in range(len(img_set)):  # 下载图片
                        img_url = img_set[i].__str__().split(' ')[0]
                        img_set[i] = img_url
                        print(img_set[i])
                        res = requests.get(img_set[i],
                                           proxies={'http': 'http://127.0.0.1:7890', 'https': 'http://127.0.0.1:7890'})
                        with open('%s\\%s-%s.jpg' % (img_path, img_title, i), 'wb') as f:
                            f.write(res.content)
                    print(img)
                    print(img_set)
                    try:
                        sql = "INSERT INTO ru_news(title, url, author, date, description, img_path)VALUES ('%s', '%s', '%s', '%s', '%s', '%s')" % (
                            title, url, author, date, description, img_title)
                        cursor.execute(sql)
                        db.commit()
                    except db.ProgrammingError as e:
                        print(e)
                        db.rollback()
                else:
                    print("dir %s is exist!" % title)

                item = MyspiderItem(title=title, url=url, author=author, date=date, description=description)
                yield item

            else:
                print('title is none')
        # for i in range(1, 10):
        #     title = divList.xpath('./li[' + i.__str__() + ']/div/div[1]/a/h2/text()').extract()[0]
        #     description = divList.xpath('./li[' + i.__str__() + ']/div/div[1]/a/p/text()').extract_first()
        #     item = MyspiderItem(title=title, description=description)
        #     yield item

        # for href in response.css('a[class="story-link"]::attr(href)'):
        #     yield scrapy.Request(href.extract(), callback=self.parse_item)
        #     // *[ @ id = "stream-panel"] / div[1] / ol / li[1] / div

    def parse_item(self, response):
        heading = response.css('h4[class="story-subheading story-content"] strong::text').extract_first()
