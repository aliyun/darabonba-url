// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.teaurl.models;

import com.aliyun.tea.*;

public class Host extends TeaModel {
    @NameInMap("hostname")
    public String hostname;

    @NameInMap("port")
    public String port;

    public static Host build(java.util.Map<String, ?> map) throws Exception {
        Host self = new Host();
        return TeaModel.build(map, self);
    }

}
