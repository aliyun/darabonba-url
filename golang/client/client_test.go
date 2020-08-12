package client

import (
	"testing"

	"github.com/alibabacloud-go/tea/utils"
)

func Test_ParseUrl(t *testing.T) {
	url := "https://sdk:test@ecs.aliyuncs.com:443/sdk/?api&ok=test#sddd"
	u, err := ParseUrl(&url)
	utils.AssertEqual(t, u.String(), `{
   "scheme": "https",
   "auth": {
      "username": "sdk",
      "password": "test"
   },
   "host": {
      "hostname": "ecs.aliyuncs.com",
      "port": "443"
   },
   "path": {
      "pathname": "/sdk/",
      "search": "api\u0026ok=test"
   },
   "hash": "sddd"
}`)
	utils.AssertNil(t, err)
}
