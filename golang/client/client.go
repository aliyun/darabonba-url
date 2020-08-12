// This file is auto-generated, don't edit it. Thanks.
/**
 * This is for Url
 */
package client

import (
	"net/url"
	"strings"

	"github.com/alibabacloud-go/tea/tea"
)

type Url struct {
	Scheme *string `json:"scheme,omitempty" xml:"scheme,omitempty"`
	Auth   *Auth   `json:"auth,omitempty" xml:"auth,omitempty"`
	Host   *Host   `json:"host,omitempty" xml:"host,omitempty"`
	Path   *Path   `json:"path,omitempty" xml:"path,omitempty"`
	Hash   *string `json:"hash,omitempty" xml:"hash,omitempty"`
}

func (s Url) String() string {
	return tea.Prettify(s)
}

func (s Url) GoString() string {
	return s.String()
}

func (s *Url) SetScheme(v string) *Url {
	s.Scheme = &v
	return s
}

func (s *Url) SetAuth(v *Auth) *Url {
	s.Auth = v
	return s
}

func (s *Url) SetHost(v *Host) *Url {
	s.Host = v
	return s
}

func (s *Url) SetPath(v *Path) *Url {
	s.Path = v
	return s
}

func (s *Url) SetHash(v string) *Url {
	s.Hash = &v
	return s
}

type Auth struct {
	Username *string `json:"username,omitempty" xml:"username,omitempty"`
	Password *string `json:"password,omitempty" xml:"password,omitempty"`
}

func (s Auth) String() string {
	return tea.Prettify(s)
}

func (s Auth) GoString() string {
	return s.String()
}

func (s *Auth) SetUsername(v string) *Auth {
	s.Username = &v
	return s
}

func (s *Auth) SetPassword(v string) *Auth {
	s.Password = &v
	return s
}

type Host struct {
	Hostname *string `json:"hostname,omitempty" xml:"hostname,omitempty"`
	Port     *string `json:"port,omitempty" xml:"port,omitempty"`
}

func (s Host) String() string {
	return tea.Prettify(s)
}

func (s Host) GoString() string {
	return s.String()
}

func (s *Host) SetHostname(v string) *Host {
	s.Hostname = &v
	return s
}

func (s *Host) SetPort(v string) *Host {
	s.Port = &v
	return s
}

type Path struct {
	Pathname *string `json:"pathname,omitempty" xml:"pathname,omitempty"`
	Search   *string `json:"search,omitempty" xml:"search,omitempty"`
}

func (s Path) String() string {
	return tea.Prettify(s)
}

func (s Path) GoString() string {
	return s.String()
}

func (s *Path) SetPathname(v string) *Path {
	s.Pathname = &v
	return s
}

func (s *Path) SetSearch(v string) *Path {
	s.Search = &v
	return s
}

/**
 * Parse ref and return an object of Url
 * @param ref  url string
 * @return the object of Url
 */
func ParseUrl(ref *string) (_result *Url, _err error) {
	u, _err := url.Parse(tea.StringValue(ref))
	if _err != nil {
		return nil, _err
	}
	passwork, _ := u.User.Password()
	h := strings.Split(u.Host, ":")
	hostname := tea.String(h[0])
	var port *string
	if len(h) > 1 {
		port = tea.String(h[1])
	}
	return &Url{
		Scheme: tea.String(u.Scheme),
		Auth: &Auth{
			Username: tea.String(u.User.Username()),
			Password: tea.String(passwork),
		},
		Host: &Host{
			Hostname: hostname,
			Port:     port,
		},
		Path: &Path{
			Pathname: tea.String(u.Path),
			Search:   tea.String(u.RawQuery),
		},
		Hash: tea.String(u.Fragment),
	}, nil
}
