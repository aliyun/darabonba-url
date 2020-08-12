# -*- coding: utf-8 -*-
# This file is auto-generated, don't edit it. Thanks.
from Tea.model import TeaModel


class Url(TeaModel):
    def __init__(self, scheme=None, auth=None, host=None, path=None, hash=None):
        self.scheme = scheme
        self.auth = auth
        self.host = host
        self.path = path
        self.hash = hash

    def validate(self):
        if self.auth:
            self.auth.validate()
        if self.host:
            self.host.validate()
        if self.path:
            self.path.validate()

    def to_map(self):
        result = {}
        result['scheme'] = self.scheme
        if self.auth is not None:
            result['auth'] = self.auth.to_map()
        else:
            result['auth'] = None
        if self.host is not None:
            result['host'] = self.host.to_map()
        else:
            result['host'] = None
        if self.path is not None:
            result['path'] = self.path.to_map()
        else:
            result['path'] = None
        result['hash'] = self.hash
        return result

    def from_map(self, map={}):
        self.scheme = map.get('scheme')
        if map.get('auth') is not None:
            temp_model = Auth()
            self.auth = temp_model.from_map(map['auth'])
        else:
            self.auth = None
        if map.get('host') is not None:
            temp_model = Host()
            self.host = temp_model.from_map(map['host'])
        else:
            self.host = None
        if map.get('path') is not None:
            temp_model = Path()
            self.path = temp_model.from_map(map['path'])
        else:
            self.path = None
        self.hash = map.get('hash')
        return self


class Auth(TeaModel):
    def __init__(self, username=None, password=None):
        self.username = username
        self.password = password

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['username'] = self.username
        result['password'] = self.password
        return result

    def from_map(self, map={}):
        self.username = map.get('username')
        self.password = map.get('password')
        return self


class Host(TeaModel):
    def __init__(self, hostname=None, port=None):
        self.hostname = hostname
        self.port = port

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['hostname'] = self.hostname
        result['port'] = self.port
        return result

    def from_map(self, map={}):
        self.hostname = map.get('hostname')
        self.port = map.get('port')
        return self


class Path(TeaModel):
    def __init__(self, pathname=None, search=None):
        self.pathname = pathname
        self.search = search

    def validate(self):
        pass

    def to_map(self):
        result = {}
        result['pathname'] = self.pathname
        result['search'] = self.search
        return result

    def from_map(self, map={}):
        self.pathname = map.get('pathname')
        self.search = map.get('search')
        return self
