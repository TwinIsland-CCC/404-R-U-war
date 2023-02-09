# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

import scrapy


class NkunewsItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    NewsTitle = scrapy.Field()
    NewsUrl = scrapy.Field()
    NewsTime = scrapy.Field()
    pass
