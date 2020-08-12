# This file is auto-generated, don't edit it. Thanks.
from urllib.parse import urlparse

from alibabacloud_url.models import Auth, Url, Host, Path


class Client:
    """
    This is for Url
    """
    @staticmethod
    def parse_url(ref):
        """
        Parse ref and return an object of Url

        :type ref: str
        :param ref:  url string

        :return: the object of Url
        """
        url = urlparse(ref)
        return Url(
            scheme=url.scheme,
            auth=Auth(url.username, url.password),
            host=Host(url.hostname, url.port),
            path=Path(url.path, url.query),
            hash=url.fragment
        )
