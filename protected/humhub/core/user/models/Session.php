<?php

namespace humhub\core\user\models;

use humhub\components\ActiveRecord;

/**
 * This is the model class for table "user_http_session".
 *
 * The followings are the available columns in table 'user_http_session':
 * @property string $id
 * @property integer $expire
 * @property integer $user_id
 * @property string $data
 *
 * @package humhub.modules_core.user.models
 * @since 0.5
 * @author Luke
 */
class Session extends ActiveRecord
{

    /**
     * @return string the associated database table name
     */
    public static function tableName()
    {
        return 'user_http_session';
    }

}