// This file is auto-generated, don't edit it. Thanks.

using System;
using AlibabaCloud.TeaUrl.Models;
using Tea.Utils;

namespace AlibabaCloud.TeaUrl
{
    public class UrlClient 
    {

        /**
         * Parse ref and return an object of Url
         * @param ref  url string
         * @return the object of Url
         */
        public static Url ParseUrl(string ref_)
        {
            Uri uri = new Uri(ref_);
            Url url = new Url();
            string userName = GetUsername(uri);
            url.Scheme = uri.Scheme;
            url.Auth = new Auth { Username = GetUsername(uri), Password = GetPassword(uri) };
            url.Host = new Host { Hostname = uri.Host, Port = uri.Port.ToSafeString() };
            url.Path = new Models.Path { Pathname = uri.AbsolutePath, Search = uri.Query.ToSafeString().TrimStart('?') };
            url.Hash = uri.Fragment.ToSafeString().TrimStart('#');
            return url;
        }

        private static string GetUsername(Uri uri)
        {
            if (uri == null || string.IsNullOrWhiteSpace(uri.UserInfo))
                return string.Empty;

            var items = uri.UserInfo.Split(new[] { ':' });
            return items.Length > 0 ? items[0] : string.Empty;
        }

        private static string GetPassword(Uri uri)
        {
            if (uri == null || string.IsNullOrWhiteSpace(uri.UserInfo))
                return string.Empty;

            var items = uri.UserInfo.Split(new[] { ':' });
            return items.Length > 1 ? items[1] : string.Empty;
        }

    }
}
