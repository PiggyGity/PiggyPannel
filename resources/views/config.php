
<?xml version="1.0" encoding="utf-8"?>
<root>
  <config>
    <FLASHSITE value="<?= config('app.flash') ?>/" />
    <BACKUP_FLASHSITE value="<?= config('app.flash')?>/" />
    <USE_MD5 value="False" />
    <SITE value="<?= config('app.resource')?>/" />
    <RESOURCE_SITE value="<?= config('app.flash')?>/" />
    <FIRSTPAGE value="<?= base_url() ?>/" />
    <REGISTER value="<?= base_url() ?>/" />
    <REQUEST_PATH value="<?= config('app.Request')?>" />
    <LOGIN_PATH value="<?= base_url() ?>/" siteName="DDT" />
    <FILL_PATH value="<?= base_url() ?>/" />
   	<WEEKLYSITE value="<?= base_url() ?>/" />
    <POLICY_FILES>
      <file value="<?= base_url() ?>/crossdomain.xml" />
    </POLICY_FILES>
    <FIGHTLIB value="true" />
    <ALLOW_MULTI value="false" />
    <TRAINER_PATH value="tutorial.swf" />
    <MUSIC_LIST value="1001,1002,1003,1004,1005,1006,1007,1008,1009,1010,1011,1012,1013,1014,1023,1024,1025,1026,1027,1028,1029,1030,1031,1032,1034,1035,1036,1037,1038,1039,1040,1059,1060,1061,1062,1063,1065,1067,1068,1069,1077" />
    <LANGUAGE value="spain" />
    <PARTER_ID value="1001212" />
    <STATISTIC value="true" />
    <SUCIDE_TIME value="300" />
    <!-- 战斗中的箱子显示，1箱子，3粽子，4月饼，5南瓜，6铃铛，7灯笼,8新春灯笼-->
    <GAME_BOXPIC value="1" />
    <ISTOPDERIICT value="true" />
    <COUNT_PATH value="http://assayerhandler.7road.com/" />
    <PHP isShow="false" link="false" site="http://baidu.com/" infoPath="http://stest.ddt.kaixin001.com.cn/test/SnsServer/GetSnsUserPortrait?uid={uid}" />
    <OFFICIAL_SITE value="http://www.7road.com" />
    <GAME_FORUM value="http://hi.baidu.com" />
    <COMMUNITY_FRIEND_PATH isUser="false" value="http://d9.the9.com/webgame/ddt/addfriend.php" />
    <COMMUNITY_INVITE_PATH value="http://d9.the9.com/webgame/ddt/invite.php" />
    <!-- 社区开关-->
    <COMMUNITY_FRIEND_LIST_PATH value="https://quest16.oasgames.com/IMFriendsBbs.ashx" snsPath="http://stest.ddt.kaixin001.com.cn/test/SnsServer/NotifySnsUserUpgrade" isexist="false" isexistBtnVisble="false" />
    <COMMUNITY_FRIEND_INVITED_SWITCH value="false" invitedOnline="false" />
    <!-- 新浪微博第1代，把社区显示为微博-->
    <COMMUNITY_MICROBLOG value="false" />
    <!-- 新浪微博第2代-->
    <COMMUNITY_SINA_SECOND_MICROBLOG value="false" />
    <ALLOW_POPUP_FAVORITE value="true" />
    <FILL_JS_COMMAND value="sandaFillHandler" enable="false" />
    <SHIELD_NOTICE value="false" />
    <!-- 桌面收藏开关节点 -->
    <DAILY enable="true" />
    <!--客服系统开关节点-->
    <FEEDBACK enable="false" />
    <!--客户端下载开关节点-->
    <DOWNLOAD value="true" />
    <!--跨区大喇叭开关节点 -->
    <CROSSBUGGlLEBTN enable="true" />
    <!--占卜系统开关节点-->
    <LOTTERY enable="false" />
    <!-- 幸运数字的开关节点-->
    <LUCKY_NUMBER enable="false" />
    <!--单机版新手引导的开关-->
    <TRAINER_STANDALONE value="true" />
    <!--3.3之前的新版新手引导开关-->
    <USER_GUILD_ENABLE value="true" />
    <!--远征码头等级限制-->
    <MINLEVELDUPLICATE value="8" />
    <!-- DISABLE_TASK_ID 为禁用的任务的ID，如有多个，请用逗号隔开 for example : 1002,1003,1004,新浪需要屏蔽的任务378,379,380,381,604-->
    <DISABLE_TASK_ID value="545,382,383,384,385" />
    <CLIENT_DOWNLOAD value="<?= base_url() ?>/laucher.exe" />
    <STATISTICS enable="true" />
    <!-- 360游戏统计，包括登陆，进入战斗等-->
    <EXTERNAL_INTERFACE_360 value="http://s.1360.cn/game_event" enable="false" />
    <!--小游戏等级限制开关-->
    <LITTLEGAMEMINLV value="20" />
    <!-- 交友中心和结婚的开关-->
    <SHOW_BACKGROUND value="true" />
    <FRAME_TIME_OVER_TAG value="67" />
    <!-- 游戏边框背景开关 -->
    <MODULE>
      <WEEKLY enable="false" />
      <CIVIL enable="true" />
      <CHURCH enable="true" />
    </MODULE>
    <CHAT_FACE>
      <DISABLED_LIST list="38" />
    </CHAT_FACE><!-- 每帧执行的毫秒数,正常值应为40毫秒,并允许在35至45毫秒之间波动  (游戏内正常帧速为 25帧/秒)--><!-- 连续低于上述毫秒的帧数 (游戏内正常帧速为 25帧/秒) -->
    <GAME_FRAME_CONFIG>
      <FRAME_OVER_COUNT_TAG value="25" />
    </GAME_FRAME_CONFIG>
    <PETS_EAT enable="false" />
  </config>
  <update>
    <version from="787" to="788">
      <file value="flash/DDT_Loading.swf" />
      <file value="DDT_Loading.swf" />
    </version>
    <version from="788" to="789">
      <file value="flash/ui/spain/swf/chatball.swf" />
      <file value="ui/spain/swf/chatball.swf" />
    </version>
    <version from="789" to="790">
      <file value="flash/ui/spain/swf/chatball.swf" />
      <file value="ui/spain/swf/chatball.swf" />
    </version>
	<version from="790" to="791">
      <file value="flash/ui/spain/swf/gameover.swf" />
	  <file value="ui/spain/swf/gameover.swf" />
	  <file value="flash/2.png" />
      <file value="2.png" />
    </version>
	<version from="791" to="792">
      <file value="sound/062.flv" />
	  <file value="sound/065.flv" />
	  <file value="sound/140.flv" />
    </version>
	<version from="792" to="793">
      <file value="flash/ui/spain/swf/forgemain.swf" />
    </version>
	<version from="793" to="794">
      <file value="flash/DDT_Loading.swf" />
      <file value="DDT_Loading.swf" />
	  <file value="flash/2.png" />
      <file value="2.png" />
    </version>
	<version from="794" to="795">
	  <file value="flash/1.png" />
      <file value="1.png" />
    </version>
  </update>
</root>