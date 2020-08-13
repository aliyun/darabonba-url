// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.teaurl.models;

import com.aliyun.tea.*;

public class Path extends TeaModel {
    @NameInMap("pathname")
    public String pathname;

    @NameInMap("search")
    public String search;

    public static Path build(java.util.Map<String, ?> map) throws Exception {
        Path self = new Path();
        return TeaModel.build(map, self);
    }

}
