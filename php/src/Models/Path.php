<?php

// This file is auto-generated, don't edit it. Thanks.

namespace Darabonba\Url\Models;

use AlibabaCloud\Tea\Model;

class Path extends Model
{
    public $pathname;

    public $search;

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pathname) {
            $res['pathname'] = $this->pathname;
        }
        if (null !== $this->search) {
            $res['search'] = $this->search;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Path
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pathname'])) {
            $model->pathname = $map['pathname'];
        }
        if (isset($map['search'])) {
            $model->search = $map['search'];
        }

        return $model;
    }
}
