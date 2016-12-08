# -*- coding: utf-8 -*-

from pywikibot import family
from pywikibot.tools import deprecated


class Family(family.Family):
    def __init__(self):
        family.Family.__init__(self)
        self.name = 'liquipedia'
        self.langs = {
            'commons': 'wiki.teamliquid.net',
            'counterstrike': 'wiki.teamliquid.net',
            'dota2': 'wiki.teamliquid.net',
            'hearthstone': 'wiki.teamliquid.net',
            'heroes': 'wiki.teamliquid.net',
            'overwatch': 'wiki.teamliquid.net',
            'smash': 'wiki.teamliquid.net',
            'staff': 'wiki.teamliquid.net',
            'starcraft': 'wiki.teamliquid.net',
            'starcraft2': 'wiki.teamliquid.net',
            'warcraft': 'wiki.teamliquid.net',
            'fighters': 'wiki.teamliquid.net',
            'rocketleague': 'wiki.teamliquid.net',
            'clashroyale': 'wiki.teamliquid.net',
        }

    def scriptpath(self, code):
        return {
            'commons': '/commons',
            'counterstrike': '/counterstrike',
            'dota2': '/dota2',
            'hearthstone': '/hearthstone',
            'heroes': '/heroes',
            'overwatch': '/overwatch',
            'smash': '/smash',
            'staff': '/staff',
            'starcraft': '/starcraft',
            'starcraft2': '/starcraft2',
            'warcraft': '/warcraft',
            'fighters': '/fighters',
            'rocketleague': '/rocketleague',
            'clashroyale': '/clashroyale',
        }[code]

    @deprecated('APISite.version()')
    def version(self, code):
        return {
            'commons': u'1.25.2',
            'counterstrike': u'1.25.2',
            'dota2': u'1.25.2',
            'hearthstone': u'1.25.2',
            'heroes': u'1.25.2',
            'overwatch': u'1.25.2',
            'smash': u'1.25.2',
            'staff': u'1.25.2',
            'starcraft': u'1.25.2',
            'starcraft2': u'1.25.2',
            'warcraft': u'1.25.2',
            'fighters': u'1.25.2',
            'rocketleague': u'1.25.2',
            'clashroyale': u'1.25.2',
        }[code]

    def protocol(self, code):
        return {
            'commons': u'http',
            'counterstrike': u'http',
            'dota2': u'http',
            'hearthstone': u'http',
            'heroes': u'http',
            'overwatch': u'http',
            'smash': u'http',
            'staff': u'http',
            'starcraft': u'http',
            'starcraft2': u'http',
            'warcraft': u'http',
            'fighters': u'http',
            'rocketleague': u'http',
            'clashroyale': u'http',
        }[code]