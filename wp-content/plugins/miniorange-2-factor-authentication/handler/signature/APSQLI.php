<?php
$regex['SQL'][1] = array( "#(?i:\b(?:(?:m(?:s(?:ys(?:ac(?:cess(?:objects|storage|xml)|es)|(?:relationship|object|querie)s|modules2?)|db)|aster\.\.sysdatabases|ysql\.db)|pg_(?:catalog|toast)|information_schema|northwind|tempdb)\b|s(?:(?:ys(?:\.database_name|aux)|qlite(?:_temp)?_master)\b|chema(?:_name\b|\W*\())|d(?:atabas|b_nam)e\W*\())#" , "#(?i:sleep\(\s*?\d*?\s*?\)|benchmark\(.*?\,.*?\))#" , "#(?i:(?:select|;)\s+(?:benchmark|sleep|if)\s*?\(\s*?\(?\s*?\w+)#" , "#(?i:(?:[\'`](?:;?\s*?(?:having|select|union)\b\s*?[^\s]|\s*?!\s*?[\'`\w])|(?:c(?:onnection_id|urrent_user)|database)\s*?\([^\)]*?|u(?:nion(?:[\w(\s]*?select|select@)|ser\s*?\([^\)]*?)|s(?:chema\s*?\([^\)]*?|elect.*?\w?user\()|into[\s+]+(?:dump|out)file\s*?[\'`]|\s*?exec(?:ute)?.*?\Wxp_cmdshell|from\W+information_schema\W|exec(?:ute)?\s+master\.|\wiif\s*?\())#" , "#^(?i:-0000023456|4294967295|4294967296|2147483648|2147483647|0000012345|-2147483648|-2147483649|0000023456|3.0.00738585072007e-308|1e309)$#" , "#(?i:[\s()]case\s*?\(|\)\s*?like\s*?\(|having\s*?[^\s]+\s*?[^\w\s]|if\s?\([\d\w]\s*?[=<>~])#" , "#(?i:(?:[\'`](?:;*?\s*?waitfor\s+(?:delay|time)\s+[\'`]|;.*?:\s*?goto)|alter\s*?\w+.*?cha(?:racte)?r\s+set\s+\w+))#" , "#(?i:merge.*?using\s*?\(|execute\s*?immediate\s*?[\'`]|match\s*?[\w(),+-]+\s*?against\s*?\()#" , "#(?i)union.*?select.*?from#" , "@(?i:(?:;\s*?shutdown\s*?(?:[#;]|\/\*|--|\{)|waitfor\s*?delay\s?[\'`]+\s?\d|select\s*?pg_sleep))@" , "#(?i:(?:\[\$(?:ne|eq|lte?|gte?|n?in|mod|all|size|exists|type|slice|x?or|div|like|between|and)\]))#" , "%(?i:(?:create\s+(?:procedure|function)\s*?\w+\s*?\(\s*?\)\s*?-|;\s*?(?:declare|open)\s+[\w-]+|procedure\s+analyse\s*?\(|declare[^\w]+[@#]\s*?\w+|exec\s*?\(\s*?\@))%" , "#(?i:(?:;\s*?(?:(?:(?:trunc|cre|upd)at|renam)e|(?:inser|selec)t|de(?:lete|sc)|alter|load)\s*?[\[(]?\w{2,}|create\s+function\s+.+\s+returns))#" , "#(?i:(?:^[\W\d]+\s*?(?:alter\s*(?:a(?:(?:pplication\s*rol|ggregat)e|s(?:ymmetric\s*ke|sembl)y|u(?:thorization|dit)|vailability\s*group)|c(?:r(?:yptographic\s*provider|edential)|o(?:l(?:latio|um)|nversio)n|ertificate|luster)|s(?:e(?:rv(?:ice|er)|curity|quence|ssion|arch)|y(?:mmetric\s*key|nonym)|togroup|chema)|m(?:a(?:s(?:ter\s*key|k)|terialized)|e(?:ssage\s*type|thod)|odule)|l(?:o(?:g(?:file\s*group|in)|ckdown)|a(?:ngua|r)ge|ibrary)|t(?:(?:abl(?:espac)?|yp)e|r(?:igger|usted)|hreshold|ext)|p(?:a(?:rtition|ckage)|ro(?:cedur|fil)e|ermission)|d(?:i(?:mension|skgroup)|atabase|efault|omain)|r(?:o(?:l(?:lback|e)|ute)|e(?:sourc|mot)e)|f(?:u(?:lltext|nction)|lashback|oreign)|e(?:xte(?:nsion|rnal)|(?:ndpoi|ve)nt)|in(?:dex(?:type)?|memory|stance)|b(?:roker\s*priority|ufferpool)|x(?:ml\s*schema|srobject)|w(?:ork(?:load)?|rapper)|hi(?:erarchy|stogram)|o(?:perator|utline)|(?:nicknam|queu)e|us(?:age|er)|group|java|view)|u(?:nion\s*(?:(?:distin|sele)ct|all)|pdate)|(?:(?:trunc|cre)at|renam)e|(?:inser|selec)t|de(?:lete|sc)|load)\b|(?:(?:(?:trunc|cre|upd)at|renam)e|(?:inser|selec)t|de(?:lete|sc)|alter|load)\s+(?:group_concat|load_file|char)\s?\(?|[\d\W]\s+as\s*?[\'`\w]+\s*?from|[\s(]load_file\s*?\(|[\'`]\s+regexp\W|end\s*?\);))#" , "#(?i:/\*[!+](?:[\w\s=_\-()]+)?\*/)#" );
$score['SQL'][1] = array( 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 );
$regex['SQL'][2] = array( "#(?:^\s*[\'`;]+|[\'`]+\s*$)#" , "#(?i:(?:(?:^|\W)in[+\s]*\([\s\d\]+[^()]*\)|\b(?:r(?:egexp|like)|isnull|xor)\b|<(?:>(?:\s+binary)?|=>?|<)|r(?:egexp|like)\s+binary|not\s+between\s+0\s+and|(?:like|is)\s+null|>[=>]|\|\||!=|&&))#" , "#(?i:[\s'\`()]*?([\d\w]++)[\s'\`()]*?(?:<(?:=(?:[\s'\`()]*?(?!\1)[\d\w]+|>[\s'\`()]*?(?:\1))|>?[\s'\`()]*?(?!\1)[\d\w]+)|(?:not\s+(?:regexp|like)|is\s+not|>=?|!=|\^)[\s'\`()]*?(?!\1)[\d\w]+|(?:(?:sounds\s+)?like|r(?:egexp|like)|=)[\s'\`()]*?(?:\1)))#" , "#(?i)\b(?:c(?:o(?:n(?:v(?:ert(?:_tz)?)?|cat(?:_ws)?|nection_id)|(?:mpres)?s|ercibility|(?:un)?t|llation|alesce)|ur(?:rent_(?:time(?:stamp)?|date|user)|(?:dat|tim)e)|h(?:ar(?:(?:acter)?_length|set)?|r)|iel(?:ing)?|ast|r32)|s(?:u(?:b(?:str(?:ing(?:_index)?)?|(?:dat|tim)e)|m)|t(?:d(?:dev_(?:sam|po)p)?|r(?:_to_date|cmp))|e(?:c(?:_to_time|ond)|ssion_user)|ys(?:tem_user|date)|ha[12]?|oundex|chema|ig?n|leep|pace|qrt)|i(?:s(?:_(?:ipv(?:4(?:_(?:compat|mapped))?|6)|n(?:ot(?:_null)?|ull)|(?:free|used)_lock)|null)|n(?:et(?:6_(?:aton|ntoa)|_(?:aton|ntoa))|s(?:ert|tr)|terval)?|f(?:null)?)|d(?:a(?:t(?:e(?:_(?:format|add|sub)|diff)?|abase)|y(?:of(?:month|week|year)|name)?)|e(?:(?:s_(?:de|en)cryp|faul)t|grees|code)|count|ump)|l(?:o(?:ca(?:l(?:timestamp)?|te)|g(?:10|2)?|ad_file|wer)|ast(?:_(?:inser_id|day))?|e(?:(?:as|f)t|ngth)|case|trim|pad|n)|u(?:n(?:compress(?:ed_length)?|ix_timestamp|hex)|tc_(?:time(?:stamp)?|date)|p(?:datexml|per)|uid(?:_short)?|case|ser)|t(?:ime(?:_(?:format|to_sec)|stamp(?:diff|add)?|diff)?|o(?:(?:second|day)s|_base64|n?char)|r(?:uncate|im)|an)|m(?:a(?:ke(?:_set|date)|ster_pos_wait|x)|i(?:(?:crosecon)?d|n(?:ute)?)|o(?:nth(?:name)?|d)|d5)|r(?:e(?:p(?:lace|eat)|lease_lock|verse)|a(?:wtohex|dians|nd)|o(?:w_count|und)|ight|trim|pad)|f(?:i(?:eld(?:_in_set)?|nd_in_set)|rom_(?:unixtime|base64|days)|o(?:und_rows|rmat)|loor)|p(?:o(?:w(?:er)?|sition)|eriod_(?:diff|add)|rocedure_analyse|assword|g_sleep|i)|a(?:s(?:cii(?:str)?|in)|es_(?:de|en)crypt|dd(?:dat|tim)e|(?:co|b)s|tan2?|vg)|b(?:i(?:t_(?:length|count|x?or|and)|n(?:_to_num)?)|enchmark)|e(?:x(?:tract(?:value)?|p(?:ort_set)?)|nc(?:rypt|ode)|lt)|g(?:r(?:oup_conca|eates)t|et_(?:format|lock))|v(?:a(?:r(?:_(?:sam|po)p|iance)|lues)|ersion)|o(?:(?:ld_passwo)?rd|ct(?:et_length)?)|we(?:ek(?:ofyear|day)?|ight_string)|n(?:o(?:t_in|w)|ame_const|ullif)|h(?:ex(?:toraw)?|our)|qu(?:arter|ote)|year(?:week)?|xmltype)\W*\(#" , "@(?i:[\'`](?:\s*?(?:(?:between|x?or|and|div)[\w\s-]+\s*?[+<>=(),-]\s*?[\d\'`]|like(?:[\w\s-]+\s*?[+<>=(),-]\s*?[\d\'`]|\W+[\w\'`(])|[!=|](?:[\d\s!=+-]+.*?[\'`(].*?|[\d\s!=]+.*?\d+)$|[^\w\s]?=\s*?[\'`])|(?:\W*?[+=]+\W*?|[<>~]+)[\'`])|(?:/\*)+[\'`]+\s?(?:\/\*|--|\{|#)?|\d[\'`]\s+[\'`]\s+\d|where\s[\s\w\.,-]+\s=|^admin\s*?[\'`]|\sis\s*?0\W)@" , "#(?i:(?:(?:(?:(?:trunc|cre|upd)at|renam)e|(?:inser|selec)t|de(?:lete|sc)|alter|load)\s*?\(\s*?space\s*?\(|,.*?[)\da-f\'`][\'`](?:[\'`].*?[\'`]|(?:\r?\n)?\z|[^\'`]+)|\Wselect.+\W*?from))#" , "%(?i:(?:(?:n(?:and|ot)|(?:x?x)?or|between|\|\||like|and|div|&&)[\s(]+\w+[\s)]*?[!=+]+[\s\d]*?[\'`=()]|\/\w+;?\s+(?:between|having|select|like|x?or|and|div)\W|\d+\s*?(?:between|like|x?or|and|div)\s*?\d+\s*?[\-+]|--\s*?(?:(?:insert|update)\s*?\w{2,}|alter|drop)|#\s*?(?:(?:insert|update)\s*?\w{2,}|alter|drop)|;\s*?(?:(?:insert|update)\s*?\w{2,}|alter|drop)|\@.+=\s*?\(\s*?select|\d\s+group\s+by.+\(|[^\w]SET\s*?\@\w+))%" , "#(?i:[\'`]\s*?(?:(?:n(?:and|ot)|(?:x?x)?or|between|\|\||and|div|&&)\s+[\s\w]+=\s*?\w+\s*?having\s+|like(?:\s+[\s\w]+=\s*?\w+\s*?having\s+|\W*?[\'`\d])|[^?\w\s=.,;)(]++\s*?[(@\'`]*?\s*?\w+\W+\w|\*\s*?\w+\W+[\'`])|(?:union\s*?(?:distinct|[(!@]*?|all)?\s*?[([]*?\s*?select|select\s+?[\[\]()\s\w\.,\'`-]+from)\s+|\w+\s+like\s+[\'`]|find_in_set\s*?\(|like\s*?[\'`]%)#" , "@(?i:(?:(?:n(?:and|ot)|(?:x?x)?or|between|\|\||like|and|div|&&)\s+\s*?\w+\(|\)\s*?when\s*?\d+\s*?then|[\'`]\s*?(?:--|\{|#)|cha?r\s*?\(\s*?\d|\/\*!\s?\d+))@" , "#(?i:(?:[\'`](?:;\s*?(?:begin|while|if)|[\s\d]+=\s*?\d|\s+and\s*?=\W)|(?:\(\s*?select\s*?\w+|order\s+by\s+if\w*?|coalesce)\s*?\(|\w[\'`]\s*?(?:(?:[-+=|@]+\s+?)+|[-+=|@]+)[\d(]|[\s(]+case\d*?\W.+[tw]hen[\s(]|\+\s*?\d+\s*?\+\s*?\@|\@\@\w+\s*?[^\w\s]|\W!+[\'`]\w|\*\/from))#" , "#(?i:(?:(?:(?:^[\'`\\\\]*?[^\'`]+[\'`])+|(?:^[\'`\\\\]*?[\d\'`]+)+)\s*?(?:n(?:and|ot)|(?:x?x)?or|between|\|\||like|and|div|&&)\s*?[\w\'`][+&!@(),.-]|\@(?:[\w-]+\s(?:between|like|x?or|and|div)\s*?[^\w\s]|\w+\s+(?:between|like|x?or|and|div)\s*?[\'`\d]+)|[\'`]\s*?(?:between|like|x?or|and|div)\s*?[\'`]?\d|[^\w\s:]\s*?\d\W+[^\w\s]\s*?[\'`].|[^\w\s]\w+\s*?[|-]\s*?[\'`]\s*?\w|\Winformation_schema|\\\\x(?:23|27|3d)|table_name\W|^.?[\'`]$))#" , "@(?i:(?:[\'`](?:\s*?(?:is\s*?(?:[\d.]+\s*?\W.*?[\'`]|\d.+[\'`]?\w)|\d\s*?(?:--|#))|(?:\W+[\w+-]+\s*?=\s*?\d\W+|\|?[\w-]{3,}[^\w\s.,]+)[\'`]|[\%&<>^=]+\d\s*?(?:between|like|x?or|and|div|=))|(?i:n?and|x?x?or|div|like|between|not|\|\||\&\&)\s+[\s\w+]+(?:sounds\s+like\s*?[\'`]|regexp\s*?\(|[=\d]+x)|in\s*?\(+\s*?select))@" , "#(?i:^[\W\d]+\s*?(?:alter|union)\b)#" , "@(?i:[\'`](?:\s*?(?:(?:\*.+(?:(?:an|i)d|between|like|x?or|div)\W*?[\'`]|(?:between|like|x?or|and|div)\s[^\d]+[\w-]+.*?)\d|[^\w\s?]+\s*?[^\w\s]+\s*?[\'`]|[^\w\s]+\s*?[\W\d].*?(?:--|#))|.*?\*\s*?\d)|[()\*<>%+-][\w-]+[^\w\s]+[\'`][^,]|\^[\'`])@" , "#(?:\b(?:having\b?(?:[\'\][^=]{1,10}[\'\?[=<>]+|\d{1,10}?[=<>]+)|(?i:having)\b\s+(?:'[^=]{1,10}'|\d{1,10})\s*?[=<>])|exists\s(?:s(?:elect\S(?:if(?:null)?\s\(|concat|top)|ystem\s\()|\b(?i:having)\b\s+\d{1,10}|'[^=]{1,10}'|\sselect)|(?i:\bexecute\s{1,5}[\w\.$]{1,5}\s{0,3})|(?i:\bcreate\s+?table.{0,20}?\()|(?i:\blike\W*?char\W*?\()|(?i:select.*?case)|(?i:from.*?limit)|(?i:\bexecute\()|(?i:order\sby))#" , "#(?:\b(?:(?i:xor)\b\s+(?:'[^=]{1,10}'(?:\s*?[=<>])?|\d{1,10}(?:\s*?[=<>])?)|(?i:or)\b\s+(?:'[^=]{1,10}'(?:\s*?[=<>])?|\d{1,10}(?:\s*?[=<>])?))|(?i:\bor\b?[\'\][^=]{1,10}[\'\]?[=<>]+)|(?i:'\s+xor\s+.{1,20}[+\-!<>=])|(?i:'\s+or\s+.{1,20}[+\-!<>=])|(?i:\bor\b?\d{1,10}?[=<>]+))#" , "#(?i:\band\b(?:\s+(?:'[^=]{1,10}'(?:\s*?[=<>])?|\d{1,10}(?:\s*?[=<>])?)|?(?:[\'\][^=]{1,10}[\'\]|\d{1,10})?[=<>]+))#" , "#(?i:\b(?:c(?:o(?:n(?:v(?:ert(?:_tz)?)?|cat(?:_ws)?|nection_id)|(?:mpres)?s|ercibility|(?:un)?t|alesce)|ur(?:rent_(?:time(?:stamp)?|date|user)|(?:dat|tim)e)|h(?:ar(?:(?:acter)?_length|set)?|r)|iel(?:ing)?|ast|r32)|s(?:t(?:d(?:dev(?:_(?:sam|po)p)?)?|r(?:_to_date|cmp))|u(?:b(?:str(?:ing(?:_index)?)?|(?:dat|tim)e)|m)|e(?:c(?:_to_time|ond)|ssion_user)|ys(?:tem_user|date)|ha[12]?|oundex|chema|ig?n|leep|pace|qrt)|i(?:s(?:_(?:ipv(?:4(?:_(?:compat|mapped))?|6)|n(?:ot(?:_null)?|ull)|(?:free|used)_lock)|null)?|n(?:et(?:6_(?:aton|ntoa)|_(?:aton|ntoa))|s(?:ert|tr)|terval)?|f(?:null)?)|d(?:a(?:t(?:e(?:_(?:format|add|sub)|diff)?|abase)|y(?:of(?:month|week|year)|name)?)|e(?:(?:s_(?:de|en)cryp|faul)t|grees|code)|count|ump)|l(?:o(?:ca(?:l(?:timestamp)?|te)|g(?:10|2)?|ad_file|wer)|ast(?:_(?:insert_id|day))?|e(?:(?:as|f)t|ngth)|case|trim|pad|n)|u(?:n(?:compress(?:ed_length)?|ix_timestamp|hex)|tc_(?:time(?:stamp)?|date)|p(?:datexml|per)|uid(?:_short)?|case|ser)|r(?:a(?:wto(?:nhex(?:toraw)?|hex)|dians|nd)|e(?:p(?:lace|eat)|lease_lock|verse)|o(?:w_count|und)|ight|trim|pad)|t(?:ime(?:_(?:format|to_sec)|stamp(?:diff|add)?|diff)?|o_(?:(?:second|day)s|base64|n?char)|r(?:uncate|im)|an)|m(?:a(?:ke(?:_set|date)|ster_pos_wait|x)|i(?:(?:crosecon)?d|n(?:ute)?)|o(?:nth(?:name)?|d)|d5)|f(?:i(?:eld(?:_in_set)?|nd_in_set)|rom_(?:unixtime|base64|days)|o(?:und_rows|rmat)|loor)|p(?:o(?:w(?:er)?|sition)|eriod_(?:diff|add)|rocedure_analyse|assword|g_sleep|i)|a(?:s(?:cii(?:str)?|in)|es_(?:de|en)crypt|dd(?:dat|tim)e|(?:co|b)s|tan2?|vg)|b(?:i(?:t_(?:length|count|x?or|and)|n(?:_to_num)?)|enchmark)|e(?:x(?:tract(?:value)?|p(?:ort_set)?)|nc(?:rypt|ode)|lt)|g(?:r(?:oup_conca|eates)t|et_(?:format|lock))|v(?:a(?:r(?:_(?:sam|po)p|iance)|lues)|ersion)|o(?:(?:ld_passwo)?rd|ct(?:et_length)?)|we(?:ek(?:ofyear|day)?|ight_string)|n(?:o(?:t_in|w)|ame_const|ullif)|h(?:ex(?:toraw)?|our)|qu(?:arter|ote)|year(?:week)?|xmltype)\W*?\()#" , "#(?i:(?:xp_(?:reg(?:re(?:movemultistring|ad)|delete(?:value|key)|enum(?:value|key)s|addmultistring|write)|(?:servicecontro|cmdshel)l|e(?:xecresultset|numdsn)|ntsec(?:_enumdomains)?|terminate(?:_process)?|availablemedia|loginconfig|filelist|dirtree|makecab)|s(?:p_(?:(?:addextendedpro|sqlexe)c|p(?:assword|repare)|replwritetovarbin|is_srvrolemember|execute(?:sql)?|makewebtask|oacreate|help)|ql_(?:longvarchar|variant))|open(?:owa_util|rowset|query)|(?:n?varcha|tbcreato)r|autonomous_transaction|db(?:a_users|ms_java)|utl_(?:file|http)))#" , "#(?i:(?:\b(?:(?:s(?:elect\b.{1,100}?\b(?:(?:(?:length|count)\b.{1,100}?|.*?\bdump\b.*)\bfrom|to(?:p\b.{1,100}?\bfrom|_(?:numbe|cha)r)|(?:from\b.{1,100}?\bwher|data_typ)e|instr)|ys_context)|in(?:to\b\W*?\b(?:dump|out)file|sert\b\W*?\binto|ner\b\W*?\bjoin)|u(?:nion\b.{1,100}?\bselect|tl_inaddr)|group\b.*?\bby\b.{1,100}?\bhaving|d(?:elete\b\W*?\bfrom|bms_\w+\.)|load\b\W*?\bdata\b.*?\binfile)\b|print\b\W*?\@\@)|(?:;\W*?\b(?:shutdown|drop)|collation\W*?\(a|\@\@version)\b|'(?:s(?:qloledb|a)|msdasql|dbo)'))#" , "/((?:[~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>][^~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>]*?){12})/ " , "@(?:/\*!?|\*/|[';]--|--[\s\r\n\v\f]|--[^-]*?-|[^&-]#.*?[\s\r\n\v\f]|;?\\x00)@" , "#(?i:(?:\A|[^\d])0x[a-f\d]{3,})#" , " (?:`((?:[\w\s=_\-+{}()<@]){2,29}|(?:[A-Za-z0-9+\/]{4})+(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?)`)" );
$score['SQL'][2] = array( 3 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 5 , 3 , 5 , 5 , 5 );
$regex['SQL'][3] = array( "#(?i)\W+\d*?\s*?having\s*?[^\s\-]#" , "#[\'`][\s\d]*?[^\w\s]\W*?\d\W*?.*?[\'`\d]#" , "/((?:[~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>][^~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>]*?){8})/ " , "/((?:[~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>][^~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>]*?){6})/ " , " /(?:'((?:[\w\s=_\-+{}()<@]){2,29}|(?:[A-Za-z0-9+\/]{4})+(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?)')/ " );
$score['SQL'][3] = array( 5 , 5 , 3 , 3 , 3 , 5 );
$regex['SQL'][4] = array( "/((?:[~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>][^~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\'´’‘`<>]*?){3})/ " , " /((?:[~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\"'´’‘`<>][^~!@#\$%\^&\*\(\)\-\+=\{\}\[\]\|:;\"'´’‘`<>]*?){2})/" );
$score['SQL'][4] = array( 3 , 3 );

?>