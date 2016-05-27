create table user(
	uid INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(40) NOT NULL,
    PRIMARY KEY ( uid )
    );

CREATE TABLE tickets (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '上线单自增id',
  `owner` char(32) NOT NULL DEFAULT '上线单的创建者',
  `subject` varchar(255) DEFAULT '' COMMENT '标题',
  `step` text COMMENT '上线步骤',
  `type` int(11) DEFAULT '0' COMMENT '上线类型，1为功能上线，2为bug修复',
  `mc` int(11) DEFAULT '0' COMMENT '是否免测，1为免测，0为不免测',
  `status` int(11) DEFAULT '1' COMMENT '上线单状态：1为创建上线单；2为提交测试；3测试成功；4请求上线；5上线完成',
  `project` int(11) DEFAULT '0' COMMENT '项目类型：php为1，sql为2，war为3',
  `toPM` varchar(255) DEFAULT NULL COMMENT '邮件抄送人列表',
  `QA_id` int(11) DEFAULT NULL COMMENT '测试人id',
  `OP_id` int(11) DEFAULT NULL COMMENT 'op',
  `complete_time` int(11) DEFAULT NULL COMMENT '上线单完成时间',
  PRIMARY KEY (`id`)
) ENGINE=Innodb  DEFAULT CHARSET=utf8


CREATE TABLE `tickets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '上线单自增id',
  `owner` char(32) NOT NULL DEFAULT '' COMMENT '上线单的创建者',
  `subject` varchar(255) DEFAULT '' COMMENT '标题',
  `step` text COMMENT '上线步骤',
  `type` int(11) DEFAULT '0' COMMENT '上线类型，1为功能上线，2为bug修复',
  `mc` int(11) DEFAULT '0' COMMENT '是否免测，1为免测，0为不免测',
  `status` int(11) DEFAULT '1' COMMENT '上线单状态：1为创建上线单；2为提交测试；3测试成功；4请求上线；5上线完成',
  `project` int(11) DEFAULT '0' COMMENT '项目类型：php为1，sql为2，war为3',
  `toPM` varchar(255) DEFAULT NULL COMMENT '邮件抄送人列表',
  `QA_id` int(11) DEFAULT NULL COMMENT '测试人id',
  `OP_id` int(11) DEFAULT NULL COMMENT 'op',
  `complete_time` int(11) DEFAULT NULL COMMENT '上线单完成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `fileservers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '服务器自增id',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '服务器描述信息',
  `ipv4` varchar(255) NOT NULL DEFAULT '' COMMENT 'ip地址或者主机名称',
  `port` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '端口',
  `prefix` varchar(255) NOT NULL DEFAULT '' COMMENT '服务器部署路径',
  `username` varchar(255) NOT NULL DEFAULT '' COMMENT '服务器用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '服务器密码',
  `del` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`),
  UNIQUE KEY `desc` (`desc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `svnservers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '服务器自增id',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '服务器描述信息',
  `ipv4` varchar(255) NOT NULL DEFAULT '' COMMENT 'ip地址或者主机名称',
  `port` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '端口',
  `prefix` varchar(255) NOT NULL DEFAULT '' COMMENT 'svn路径',
  `username` varchar(255) NOT NULL DEFAULT '' COMMENT 'svn用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT 'svn密码',
  `del` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`),
  UNIQUE KEY `desc` (`desc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '项目id',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '项目名称',
  `svn` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '项目对应的svn服务器id',
  `servers` varchar(255) NOT NULL DEFAULT '' COMMENT '项目对应的部署程序的服务器的列表',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '项目状态,0为正常,1为不使用',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




    
    