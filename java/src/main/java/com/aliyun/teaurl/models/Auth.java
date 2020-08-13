// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.teaurl.models;

import com.aliyun.tea.*;

public class Auth extends TeaModel {
    @NameInMap("username")
    public String username;

    @NameInMap("password")
    public String password;

    public static Auth build(java.util.Map<String, ?> map) throws Exception {
        Auth self = new Auth();
        return TeaModel.build(map, self);
    }

}
