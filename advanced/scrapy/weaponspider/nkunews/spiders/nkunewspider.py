import scrapy
from nkunews.items import NkunewsItem


class NkunewspiderSpider(scrapy.Spider):
    name = "nkunewspider"
    allowed_domains = ["pewpewpew.work"]
    start_urls = ["http://pewpewpew.work/smallarms.htm"]
    #baseUrl = "http://news.nankai.edu.cn/ywsd/system/count//0003000/000000000000/000/000/c0003000000000000000_000000"
    #offset = 570
    #behind = ".shtml"

    def parse(self, response):
       
        node_list=response.xpath("//tr")
        
        for node in node_list:
            item = NkunewsItem()
            if len(node.xpath(".//td[1]/span/font[2]/a/text() | .//td[1]/span/font/a/text() | .//td[1]/span/font[2]/span/a/text() | .//td[1]/p/span/font/a/text() | .//td[1]/span/a/font/text()")):
                item['NewsTitle'] = node.xpath(".//td[1]/span/font[2]/a/text() | .//td[1]/span/font/a/text() | .//td[1]/span/font[2]/span/a/text()  | .//td[1]/p/span/font/a/text() | .//td[1]/span/a/font/text()").extract()[0].encode("utf-8")
            else :
                item['NewsTitle'] =""
            
            if len(node.xpath(".//td[1]/span/font[2]/a/@href | .//td[1]/span/font/a/@href | .//td[1]/span/font[2]/span/a/@href | .//td[1]/p/span/font/a/@href | .//td[1]/span/a/@href")):
                
                item['NewsUrl'] = node.xpath(".//td[1]/span/font[2]/a/@href | .//td[1]/span/font/a/@href | .//td[1]/span/font[2]/span/a/@href | .//td[1]/p/span/font/a/@href | .//td[1]/span/a/@href").extract()[0].encode("utf-8")
                
            else:
                item['NewsUrl'] =""
            if len(node.xpath(".//td[2]/span/font/text() | .//td[2]/span/font/span/font/text() | .//td[2]/font/span/font/text() |.//td[2]/span/font/font/text()")):
                
                item['NewsTime'] = node.xpath(".//td[2]/span/font/text()| .//td[2]/span/font/span/font/text() | .//td[2]/font/span/font/text() |.//td[2]/span/font/font/text()").extract()[0].encode("utf-8")
            else:
                item['NewsTime'] =""
            yield item

         
