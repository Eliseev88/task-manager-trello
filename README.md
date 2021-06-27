# task-manager-trello
Менеджер создания и управления задачами и todo-листами
____

## Инструкция по установки данного репозитория

- **Установите git на локальный компьютер:**
    - Для установки ***git*** на ***Ubuntu*** выполните команду:
	    `$ sudo apt install git`
	- Для ***Mac*** просто в терминале вбейте:
	    - `$ git --version`
	    - Если Git не установлен, вам будет предложено его установить.
	- Если у вас ***Windows***, то перейдите на страницу https://git-scm.com/download/win и загрузка запустится автоматически.
	- Чтобы убедиться, что ***git*** установился корректно в командной строке выполните:
	    - `$ git --version`
- **Настройте связь git c cервисом GitHub:**
	1. Создайте локальную директорию (например *C:\trello-rep*) и перейдите в нее
	2. Запустите консоль внутри этой директории и выполните команду:
	    - `$ git clone https://github.com/Eliseev88/task-manager-trello`
	3. Зайдите внутрь скаченного репозитория командой:
	    - `cd task-manager-trello`
	4. Проверьте правильность адресов для чтения и записи командой:
	    - `$ git remote -v`
	    - Результат должен быть:
	```
		origin  https://github.com/Eliseev88/task-manager-trello (fetch)
		origin  https://github.com/Eliseev88/task-manager-trello (push)
    ```
## Правила создания веток и написания коммитов

- **Каждый разработчик должен создавать свои отдельные ветки и работать из под них.**
> Ветки нужны для того, чтобы вы могли вести совместную работу над проектом и не мешать друг другу при этом. 
	Базовой веткой считается **master**. В ней содержится основной код приложения. 
	Перед тем как взяться за решение какой-то задачи, вы должны завести новую ветку от последнего рабочего коммита мастер ветки и решать задачу в этой новой ветке. 
	В ходе решения вы делаете ряд коммитов, после этого пушите изменения в удаленный репозиторий и создаете пулл-реквест.
    Не надо заводить себе именную ветку и работать всегда в ней, решая по одной задачи за раз. 
	Так можно решать только одну задачу и нельзя быстро переключиться на решение другой задачи и ветки со временем будут все сильнее расходиться.
- **Для создания ветки и перехода на нее используется команда:**
    - `$ git checkout -b user-auth-branch`
    - Обратите внимания на нейминг названия ветки ***user-auth-branch*** - он должен отражать название того, над чем вы сейчас работаете.
В данном примере из названия следует, что ветка создалась для работы над модулем аутентификации пользователя.
- **Для добавления файлов в ***git*** используйте команду:**
	- `$ git add file_name`
	- `$ git add .` - если файлов много
- **Пишите осмысленные коммиты, которые отражают в себе суть того, что было сделано**
	- Пример хорошего коммита:
		- `$ git commit -m 'Добавлены HTML формы регистрации пользователя.'`
- **После успешного слияния (merge) вашей текущей рабочей ветки с master на удаленном репозитории удаляйте уже не нужную текущую ветку и начинайте новую**
- **Перед началом работы, чтобы всегда иметь актуальный код из репозитория, выполните `$ git fetch` или `$ git pull` в зависимости от ситуации.**

____

#### ВАЖНО!!! 
#### НЕ РАБОТАЙТЕ ИЗ ПОД ВЕТКИ master И НЕ КОММИТЬТЕ ИЗ ПОД НЕЕ. 
____

## Отправка изменений в удаленный репозиторий (Push), создания пулл-реквеста и слияние (Megre) веток
- **Для отправки изменений в проекте на сервер используйте команду:**
	- `$ git push -u origin your_branch_name`
- **Далее заходите через браузер на удаленный репозиторий и создавайте pull-request**
- **Не забывайте добавлять в .gitignore служебные файлы и директории, которые не нужны в репозитории**
- **После того, как ваш пулл-реквест будет просмотрен и дан код-ревью, нажимайте на merge и удаляйте ветку**
![Alt-текст](https://github.com/Eliseev88/courses/blob/master/merge.png "merge")

## Конфликты
> Конфликты возникают при мердже веток если в этих ветках одна и та же строка кода была изменена по-разному или когда некий файл удален в одной ветке и отредактирован в другой. Тогда получается, что ***git*** не может сам решить какое из изменений нужно применить и он предлагает вручную решить эту ситуацию. Это замедляет работу с кодом в проекте. Чтобы избежать этого старайтесь распределять задачи так, чтобы связанные задачи не выполнялись одновременно различными разработчиками.
Также необходимо договориться о каком-то конкретном стиле кода, чтобы не менять форматирование кода и вероятность того, что вы измените одну и ту же строчку станет ниже.

