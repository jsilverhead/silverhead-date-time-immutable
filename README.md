## Extended DateTimeImmutable
Это скромная библиотека, где обёртка `ExtendedDateTimeImmutable` помогает расширить и упростить работу с объектами `DateTimeImmutable`.

### Включает методы:

### Создание объекта:
Объект создаётся путём нескольких статичных методов:
- `ExtendedDateTimeImmutable::create` - аналогично `DateTimeImmutable` принимает строку и пытается сформировать из неё `ExtendedDateTimeImmutable`
- `ExtendedDateTimeImmutable::createRandomDate` - создаёт `ExtendedDateTimeImmutable` с рандомной датой от 1700 до 5000 года.
- `ExtendedDateTimeImmutable::createFromUnixStamp` - принимает Unix int и пытается сфомировать `ExtendedDateTimeImmutable` 

#### Форматирование:
- `toFormattedDateTime` - Возвращает дату в формате rfc2822
- `toISODateTime` - Возвращает дату в формате ISO 8601
- `getBriefDiffHorHumans` - Возвращает краткий diff в виде строки
- `getFullDiffForHumans` - Принимает дату для сравнения и локаль в виде строки (по умолчанию en), возвращает локализованный diff
- `getFullLocaleDiffForHumans` - Возвращает полный diff в виде строки на русском языке
- `getDate` - Возвращает дату в формате d.m.Y
- `getDateUSFormat` - Возвращает дату в формате Y.m.d
- `getTime` - Возвращает время
- `getLastDayOfMonth` - Возвращает последний день месяца в виде объекта
- `getLastDayOfMonthAsString` - Возвращает последний день месяца в виде строки
- `getLocaleStringDate` - Возвращает дату в формате "d <имя месяца> Y года>
- `convertToUnixStamp` - Форматирует дату в формат Unix

#### Форматирование таймзон
- `changeTimeZoneWithoutChangingTime` - принимает таймзону в виде строки, возвращает объект с изменённой таймзоной без изменения времени
- `convertToTimeZone` - принимает таймзону в виде строки, меняет таймзону (время меняется на выбранную таймзону)

#### Арифметические операции
- `addDays` - Добавляет указанное количество дней
- `subDays` - Отнимает указанное количество дней
- `addHours` - Добавляет указанное количество часов
- `subHours` - Отнимает указанное количество часов
- `addMinutes` - Добавляет указанное количество минут
- `SubMinutes` - Отнимает указанное количество минут
- `addSeconds` - Добавляет указанное количество секунд
- `subSeconds` - Отнимает указанное количество секунд
- `addMonths` - Добавляет указанное количество месяцев
- `subMonths` - Отнимает указанное количество месяцев
- `addYears` - Добавляет указанное количество лет
- `subyears` - Отнимает указанное количество лет
- `addWeeks` - Добавляет указанное количество недель
- `subWeeks` - Отнимает указанное количество недель
- `addDecade` - Добавляет 10 лет
- `subDecade` - Отнимает 10 лет
- `addCentury` - Добавляет 100 лет
- `subCentury` - Отнимает 100 лет
- `getAge` - получает массив с возрастом персонажа в формате ['years' => 25, 'months' => 9]

#### Сравнение дат
- `isBefore` - сравнивает текущую дату с указанной, является ли текущая дата более ранней
- `isAfter` - сравнивает текущую дату с указанной, является ли текущая дата более поздней
- `isSame` - сравнивает текущую дату с указанной, являются ли они равными
- `isInRange` - сравнивает текущую дату с промежутком дат, входит ли дата в текущий промежуток

#### Итерация по датам
- `getRangeArray` - принимает конечную дату и выдаёт массив всех дат в интервале в виде массива объектов
- `getRangeArrayOfStrings` - принимает конечную дату и выдаёт массив всех дат в интервале в виде массива строк (Y-m-d)

#### Праздники и выходные
- `isHoliday` - возвращает, является ли дата праздником
- `whatHoliday` - возвращает, каким праздником является текущая дата
- `isWeekend` - возвращает, является ли дата выходным (суббота/воскресенье)

### Создание локалей
Путём команды `bin/console app:create-locale` можно создавать свои локали для библиотеки.