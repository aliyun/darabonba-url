// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.teaurl;

import com.aliyun.teaurl.models.*;

import java.net.URL;

public class Client {
    /**
     * Parse ref and return an object of Url
     * @param ref  url string
     * @return the object of Url
     */
    public static Url parseUrl(String ref) throws Exception {
        URL url = new URL(ref);

        String userInfo = url.getUserInfo();
        Auth auth = new Auth();
        if (null != userInfo) {
            String[] userMessage = userInfo.split(":");
            auth.username = userMessage[0];
            auth.password = userMessage[1];
        }

        Host host = new Host();
        host.hostname = url.getHost();
        host.port = String.valueOf(url.getPort());

        Path path = new Path();
        path.pathname = url.getPath();
        path.search = url.getQuery();

        Url result = new Url();
        result.auth = auth;
        result.host = host;
        result.path = path;
        result.hash = url.getRef();
        result.scheme = url.getProtocol();
        return result;
    }
}
