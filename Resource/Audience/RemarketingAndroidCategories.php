<?php

namespace TargetApi\Resource\Audience;

use TargetApi\Model\Audiences\RemarketingAndroidCategory as RemarketingAndroidCategoryModel;
use TargetApi\Resource\AbstaractResource;

/**
 * @author Vitaliy Dergunov (<correcter@inbox.ru>)
 */
class RemarketingAndroidCategories extends AbstaractResource
{
    /**
     * @return \TargetApi\Resource\string|object
     */
    public function get()
    {
        return $this->call('get');
    }

    /**
     * @param RemarketingAndroidCategoryModel $model
     *
     * @return \TargetApi\Resource\string|object
     */
    public function post(RemarketingAndroidCategoryModel $model)
    {
        return $this->call('post', [], $model);
    }
}
