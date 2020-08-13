// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.teaurl;

import com.aliyun.teaurl.models.Auth;
import com.aliyun.teaurl.models.Host;
import com.aliyun.teaurl.models.Path;
import com.aliyun.teaurl.models.Url;
import org.junit.Assert;
import org.junit.Test;

import java.net.URL;

public class ClientTest {

    @Test
    public void parseUrlTest() throws Exception{
        Url url = Client.parseUrl("http://user:pass@host.com:8080/p/a/t/h?query=string#hash");
        Assert.assertEquals("user", url.auth.username);
        Assert.assertEquals("pass", url.auth.password);
        Assert.assertEquals("http", url.scheme);
        Assert.assertEquals("host.com", url.host.hostname);
        Assert.assertEquals("8080", url.host.port);
        Assert.assertEquals("/p/a/t/h", url.path.pathname);
        Assert.assertEquals("query=string", url.path.search);
        Assert.assertEquals("hash", url.hash);
    }
}
