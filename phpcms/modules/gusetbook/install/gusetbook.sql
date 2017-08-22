DROP TABLE IF EXISTS `ss_guestbook`;

CREATE TABLE IF NOT EXISTS `ss_gusetbook` (
  `gid` smallint(5) NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) NOT NULL,
  `title` char(80) NOT NULL,
  `content` text NOT NULL,
  `reply` text NOT NULL,
  `passed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `reply_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `replyer` char(20) NOT NULL,
  `replytime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`gid`)
)DEFAULT CHARSET=utf8;