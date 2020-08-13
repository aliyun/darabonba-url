/**
 * This is for Url
 */
// This file is auto-generated, don't edit it. Thanks.

using Tea;

namespace AlibabaCloud.TeaUrl.Models
{
    public class Url : TeaModel {
        [NameInMap("scheme")]
        [Validation(Required=false)]
        public string Scheme { get; set; }

        [NameInMap("auth")]
        [Validation(Required=false)]
        public Auth Auth { get; set; }

        [NameInMap("host")]
        [Validation(Required=false)]
        public Host Host { get; set; }

        [NameInMap("path")]
        [Validation(Required=false)]
        public Path Path { get; set; }

        [NameInMap("hash")]
        [Validation(Required=false)]
        public string Hash { get; set; }

    }

}
