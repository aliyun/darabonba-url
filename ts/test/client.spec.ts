import Client, * as $Client from '../src/client';

import { Readable } from 'stream';
import * as $tea from '@alicloud/tea-typescript';
import assert from 'assert';
import 'mocha';

describe('Darabonba Url', function () {
  it('parse Url should ok', async function () {
    let url = 'https://sdk:test@ecs.aliyuncs.com:443/sdk/?api&ok=test#sddd';
    let ret = Client.parseUrl(url);
    assert.deepStrictEqual(ret, new $Client.Url({
      scheme: 'https',
      auth: new $Client.Auth({
        username: 'sdk',
        password: 'test'
      }),
      host: new $Client.Host({
        hostname: 'ecs.aliyuncs.com',
        port: '443'
      }),
      path: new $Client.Path({
        pathname: '/sdk/',
        search: 'api&ok=test'
      }),
      hash: 'sddd'
    }));
  })
});
