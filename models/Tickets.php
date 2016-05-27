<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tickets".
 *
 * @property integer $id
 * @property string $owner
 * @property string $subject
 * @property string $step
 * @property integer $type
 * @property integer $mc
 * @property integer $status
 * @property integer $project
 * @property string $toPM
 * @property integer $QA_id
 * @property integer $OP_id
 * @property integer $complete_time
 */
class Tickets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tickets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['step'], 'string'],
            [['type', 'mc', 'status', 'project', 'QA_id', 'OP_id', 'complete_time'], 'integer'],
            [['owner'], 'string', 'max' => 32],
            [['subject', 'toPM'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner' => 'Owner',
            'subject' => 'Subject',
            'step' => 'Step',
            'type' => 'Type',
            'mc' => 'Mc',
            'status' => 'Status',
            'project' => 'Project',
            'toPM' => 'To Pm',
            'QA_id' => 'Qa ID',
            'OP_id' => 'Op ID',
            'complete_time' => 'Complete Time',
        ];
    }
}
