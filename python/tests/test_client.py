import unittest
from alibabacloud_url.client import Client


class TestClient(unittest.TestCase):
    def test_parse_url(self):
        url = 'http://user:pass@host.com:8080/p/a/t/h?query=string#hash'
        url_model = Client.parse_url(url)
        self.assertEqual('http', url_model.scheme)
        self.assertEqual('user', url_model.auth.username)
        self.assertEqual('pass', url_model.auth.password)
        self.assertEqual('host.com', url_model.host.hostname)
        self.assertEqual(8080, url_model.host.port)
        self.assertEqual('/p/a/t/h', url_model.path.pathname)
        self.assertEqual('query=string', url_model.path.search)
        self.assertEqual('hash', url_model.hash)
