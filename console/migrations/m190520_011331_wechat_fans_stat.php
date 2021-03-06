<?php

use yii\db\Migration;

class m190520_011331_wechat_fans_stat extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%wechat_fans_stat}}', [
            'id' => "int(10) unsigned NOT NULL AUTO_INCREMENT",
            'new_attention' => "int(10) NOT NULL DEFAULT '0' COMMENT '今日新关注'",
            'cancel_attention' => "int(10) NOT NULL DEFAULT '0' COMMENT '今日取消关注'",
            'cumulate_attention' => "int(10) NOT NULL DEFAULT '0' COMMENT '累计关注'",
            'date' => "date NOT NULL",
            'status' => "tinyint(4) NULL DEFAULT '1' COMMENT '状态[-1:删除;0:禁用;1启用]'",
            'created_at' => "int(10) unsigned NULL COMMENT '添加时间'",
            'updated_at' => "int(10) unsigned NULL COMMENT '修改时间'",
            'PRIMARY KEY (`id`)'
        ], "ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 COMMENT='微信_关注统计表'");
        
        /* 索引设置 */
        $this->createIndex('uniacid','{{%wechat_fans_stat}}','date',0);
        
        
        /* 表数据 */
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%wechat_fans_stat}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

