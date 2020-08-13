// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.teaurl.models;

import com.aliyun.tea.*;

public class Url extends TeaModel {
    @NameInMap("scheme")
    public String scheme;

    @NameInMap("auth")
    public Auth auth;

    @NameInMap("host")
    public Host host;

    @NameInMap("path")
    public Path path;

    @NameInMap("hash")
    public String hash;

    public static Url build(java.util.Map<String, ?> map) throws Exception {
        Url self = new Url();
        return TeaModel.build(map, self);
    }

}
