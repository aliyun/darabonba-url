// This file is auto-generated, don't edit it
/**
 * This is for Url
 */
import * as $tea from '@alicloud/tea-typescript';
import { URL } from 'url';

export class Url extends $tea.Model {
  scheme?: string;
  auth?: Auth;
  host?: Host;
  path?: Path;
  hash?: string;
  static names(): { [key: string]: string } {
    return {
      scheme: 'scheme',
      auth: 'auth',
      host: 'host',
      path: 'path',
      hash: 'hash',
    };
  }

  static types(): { [key: string]: any } {
    return {
      scheme: 'string',
      auth: Auth,
      host: Host,
      path: Path,
      hash: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class Auth extends $tea.Model {
  username?: string;
  password?: string;
  static names(): { [key: string]: string } {
    return {
      username: 'username',
      password: 'password',
    };
  }

  static types(): { [key: string]: any } {
    return {
      username: 'string',
      password: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class Host extends $tea.Model {
  hostname?: string;
  port?: string;
  static names(): { [key: string]: string } {
    return {
      hostname: 'hostname',
      port: 'port',
    };
  }

  static types(): { [key: string]: any } {
    return {
      hostname: 'string',
      port: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

export class Path extends $tea.Model {
  pathname?: string;
  search?: string;
  static names(): { [key: string]: string } {
    return {
      pathname: 'pathname',
      search: 'search',
    };
  }

  static types(): { [key: string]: any } {
    return {
      pathname: 'string',
      search: 'string',
    };
  }

  constructor(map?: { [key: string]: any }) {
    super(map);
  }
}

const portMap = {
  ftp: '21',
  gopher: '70',
  http: '80',
  https: '443',
  ws: '80',
  wss: '443',
};


export default class Client {

  /**
   * Parse ref and return an object of Url
   * @param ref  url string
   * @return the object of Url
   */
  static parseUrl(ref: string): Url {
    const ret = new URL(ref);
    const scheme = ret.protocol ? ret.protocol.replace(':', '') : '';
    const search = ret.search ? ret.search.replace('?', '') : '';
    const hash = ret.hash ? ret.hash.replace('#', '') : '';
    return new Url({
      hash, 
      auth: new Auth({
        password: ret.password,
        username: ret.username
      }),
      host: new Host({
        hostname: ret.hostname,
        port: ret.port || portMap[scheme]
      }),
      path: new Path({
        pathname: ret.pathname,
        search,
      }),
      scheme,
    });
  }

}
