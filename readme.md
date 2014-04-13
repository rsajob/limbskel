# ����襭�� ᪥��� web-�஥�� �� Limb

## ���樠������: 
```bash
# �������� limb � ����⢥ submodul
git submodul add git://github.com/rsajob/limb.git lib/limb
```

## ������� �஥��

�᭮���� �⫨稥 �� �⠭���⭮�� ᪥��� � ����� web_app � ⮬ �� � ����� `src` 
����� �࣠��������� �������� ����⮢ (����� ������� ���㫨) �������筮 ��� �� 
ᤥ����� ᠬ�� Limb

/src/_main/ - �� ������ ����� ����� ���������� �ᥣ�� ����
/src/auth/ - ���ਬ�� ����� �⢥��騩 �� ���ਧ��� ���짮��⥫��

����� �� ᤥ���� ��� 㤮��⢠ �������஢��� � ����஭��� �ᯮ�짮����� ����. 

### ������� ����� ����⮢ ⠪�� �� ��� � � ������ limb.

```
/src/<pack>/settings/ - 䠩�� ���䨣��樨
/src/<pack>/src/ - ���
/src/<pack>/src/controller/ - ����஫����

/src/<pack>/template/ - 蠡����
```

### �������� � ����ன��� ���᪠ 蠡����� (� `settings/macro.conf.php`)
```php
$conf['tpl_scan_dirs'] 		= array('template',  'src/*/template',  'limb/*/src/template');
$conf['tags_scan_dirs'] 	= array('src/macro', 'src/*/src/macro', 'limb/*/src/macro', 	'limb/macro/src/tags');
$conf['filters_scan_dirs'] 	= array('src/macro', 'src/*/src/macro', 'limb/*/src/macro', 	'limb/macro/src/filters');
```

������ 蠫��� ������� �� ��� ������ �஥��.

����ன�� �������筮 ����� ������ ���� � ��७ �஥�� � ����� settings ���� � �����⭮� �����. ��८�।����� ⠪:
```php
lmb_env_setor('LIMB_CONF_INCLUDE_PATH', 'settings;src/*/settings;limb/*/settings');
```

����஫���� ������ � ������:
```
/src/<pack>/src/ - ���
/src/<pack>/src/controller/ - ����஫����
```

����ம��� �� ⠪:
```php
lmb_env_setor('LIMB_CONTROLLERS_INCLUDE_PATH', 'src/controller;src/*/src/controller;src/*/src;limb/web_app/src/controller');
```


