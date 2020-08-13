using AlibabaCloud.TeaUrl;

using Xunit;

namespace tests
{
    public class ClientTest
    {
        [Fact]
        public void TestParseUrl()
        {
            string url = "http://user:pass@host.com:8080/p/a/t/h?query=string#hash";
            var urlModel = UrlClient.ParseUrl(url);
            Assert.Equal("http", urlModel.Scheme);
            Assert.Equal("user", urlModel.Auth.Username);
            Assert.Equal("pass", urlModel.Auth.Password);
            Assert.Equal("host.com", urlModel.Host.Hostname);
            Assert.Equal("8080", urlModel.Host.Port);
            Assert.Equal("/p/a/t/h", urlModel.Path.Pathname);
            Assert.Equal("query=string", urlModel.Path.Search);
            Assert.Equal("hash", urlModel.Hash);

        }
    }
}
