<?php
/**
 * The upgrade module zh-tw file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2010 QingDao Nature Easy Soft Network Technology Co,LTD (www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     upgrade
 * @version     $Id: zh-tw.php 1429 2011-02-21 14:35:26Z wwccss $
 * @link        http://www.zentao.net
 */
$lang->upgrade->common  = '升級';
$lang->upgrade->result  = '升級結果';
$lang->upgrade->fail    = '升級失敗';
$lang->upgrade->success = '升級成功';
$lang->upgrade->tohome  = '返迴首頁';
$lang->upgrade->warnning= '警告';
$lang->upgrade->warnningContent = <<<EOT
警告！升級有危險，請先備份資料庫，以防萬一。<br />
備份方法：<br />
1. 可以通過phpMyAdmin進行備份。<br />
2. 使用mysql命令行的工具。<br />
   # mysqldump -u <span class='red'>username</span> -p <span class='red'>dbname</span> > <span class='red'>filename</span> <br />
   要將上面紅色的部分分別替換成對應的用戶名和禪道系統的資料庫名。<br />
   比如： mysqldump -u root -p zentao >zentao.bak
EOT;
$lang->upgrade->setStatusFile = '基于安全考慮，升級之間需要檢查這個檔案：<strong>%s</strong><br />
                                 該檔案不存在或者已經過期，請用下面的命令來創建或者更新它。<br />
                                 linux下面的命令：<strong>touch %s;</strong> <br />
                                 windows下面的命令：<strong>echo ok > %s</strong>';
$lang->upgrade->selectVersion = '選擇版本';
$lang->upgrade->noteVersion   = "務必選擇正確的版本，否則會造成數據丟失。";
$lang->upgrade->fromVersion   = '原來的版本';
$lang->upgrade->toVersion     = '升級到';
$lang->upgrade->confirm       = '確認要執行的SQL語句';
$lang->upgrade->sureExecute   = '確認執行';

$lang->upgrade->fromVersions['0_3beta']   = '0.3 BETA';
$lang->upgrade->fromVersions['0_4beta']   = '0.4 BETA';
$lang->upgrade->fromVersions['0_5beta']   = '0.5 BETA';
$lang->upgrade->fromVersions['0_6beta']   = '0.6 BETA';
$lang->upgrade->fromVersions['1_0beta']   = '1.0 BETA';
$lang->upgrade->fromVersions['1_0rc1']    = '1.0 RC1';
$lang->upgrade->fromVersions['1_0rc2']    = '1.0 RC2';
$lang->upgrade->fromVersions['1_0']       = '1.0 STABLE';
$lang->upgrade->fromVersions['1_0_1']     = '1.0.1';
$lang->upgrade->fromVersions['1_1']       = '1.1';
$lang->upgrade->fromVersions['1_2']       = '1.2';
$lang->upgrade->fromVersions['1_3']       = '1.3';
