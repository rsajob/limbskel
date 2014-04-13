## Улучшенный скелет web-проекта на Limb

### Использовать так: 

Скачать проект zip-архивом, распаковать у нужную папку, затем:
```bash
# Создаём локальный git-репозиторий
git init

# Добавить limb в качестве сабмоуля
git submodul add git://github.com/rsajob/limb.git lib/limb

# коммитим изменения
git add .
git commit -m "Init"

```

### Структура проекта

Основное отличие от стандартного скелета в пакете web_app в том что в папке `src` 
можно организовасть структуру пакетов (можно назвать модули) аналогично как это 
сделанов самом Limb.

Пример:

* `/src/_main/` - это главный пакет который добавляется всегда первым
* `/src/auth/` - например пакет отвечающий за авторизацию пользователей

Вообще это сделано для удобства структурировани и повтороного использования кода. 

### Структура внутри пакетов такая же как и в пакетах limb.

```
/src/<pack>/settings/ - файлы конфигурации
/src/<pack>/src/ - код
/src/<pack>/src/controller/ - контроллеры
/src/<pack>/template/ - шаблоны
```

### Изменеия в настройках поиска шаблонов (в `settings/macro.conf.php`)
```php
$conf['tpl_scan_dirs'] 		= array('template',  'src/*/template',  'limb/*/src/template');
$conf['tags_scan_dirs'] 	= array('src/macro', 'src/*/src/macro', 'limb/*/src/macro', 	'limb/macro/src/tags');
$conf['filters_scan_dirs'] 	= array('src/macro', 'src/*/src/macro', 'limb/*/src/macro', 	'limb/macro/src/filters');
```

Тоесть шалоны ищуться во всех пакетах проекта.

Настройки аналогично могут лежать либо в корен проекта в папке settings либо в конкретном пакете. Переопределено так:
```php
lmb_env_setor('LIMB_CONF_INCLUDE_PATH', 'settings;src/*/settings;limb/*/settings');
```

Контроллеры ищутся в папках:
```
/src/<pack>/src/ - код
/src/<pack>/src/controller/ - контроллеры
```

Настрооено это так:
```php
lmb_env_setor('LIMB_CONTROLLERS_INCLUDE_PATH', 'src/controller;src/*/src/controller;src/*/src;limb/web_app/src/controller');
```


