slide-transition: fade(0.1)
autoscale:true
slidenumbers: false

## Better *OOP* with 
# *Interface*
-
-
### **Knowledge Sharing**

[.footer-style: #FF9300, alignment(center), Avenir Next Bold]
[.slidenumbers: false]
[.footer: ◉ xun.zhou@mail.schwarz ◉ GitHub: vikbert  ]
![left fit](./assets/discussion.png)
  
--------------------------------
  
# Vorwort
-
**Sprache**: English & German
**Image**: aus Internet ohne Source-Angabe
**Definition**: mit Source-Angabe
**Ziel Gruppe**: OOP Anfänger und Fortschrittene

-
Viele Code ► ► ► 

![100% left](./assets/tip.png)

--------------------------------
# Praxis-Orientiert
### many Coding *Tasks* & *Demo*, maybe *NOT clean* enough, please focus on *design thinking* not on *coding style*

![left 120%](./assets/task.png)

--------------------------------

# Motivation
Kreuzung von Software Design: 
▽
interfaces, clean & onion architecture, CQRS
▽
Internes Austauschen via Pair-Programming
▼
-
# **Workshop**: *interfaces*

![left 100%](./assets/rocket.png)

--------------------------------


![left](./assets/agenda.png)

# Agenda
- Why is it important? (5")
- What is interface? semantic + OOP (10")
- How to write Interfaces? (10")
- 5 Use Cases you can use Interface (1h 30")
  - Coding Dojo/Mob-Programming/Review
- Conclusion (5")

![left fill](./assets/agenda.png)

--------------------------------
### *Unibody* Design ⚔️ *Plugable* Design
-
-
-
#### *Mental Model* for design

![left](https://images.bild.de/60a375f5220cde000142d5bc/f92c8df3978c6818265405bfaeb6d915/18/2?w=992)
![right](https://nzxt.com/assets/cms/34299/1627488599-streamerpc1-white-2000x2000-hero.png?ar=1%3A1&auto=format&fit=crop&h=400&w=400)

--------------------------------

# Why is *interface* important for *better OOP*?

^please

--------------------------------

### *Don't* depend on *concrete classes*...
### Depend on *abstractions*, not on concretions...
# *Interface* 
### is the key to keeping code *cleaner*...
-
-
# S.*O*.L.*I.D*
### ✓ Open/Closed Principle
### ✓ Interface Segretation Principle
### ✓ Dependency Inversion Principle
-

![left 100%](https://images-na.ssl-images-amazon.com/images/I/51ePhoOSvnL._SX258_BO1,204,203,200_.jpg)

[.footer: Book: Agile Software Development. Principles, Patterns, and Practices]

--------------------------------

# Fundamental thinking for OOP *design pattern*
#### **You shoul know interface first, before drive deeper into design patterns.**

[.column]
- ✅ chain of responsibility pattern
- ✅ observer pattern
- ✅ interpreter pattern
- ✅ iterator pattern
- ✅ state pattern
- ✅ strategy pattern
- ✅ mediator pattern
- ✅ visitor pattern
- ✅ adapter pattern

[.column]
- ✅ proxy pattern
- ✅ bridge pattern
- ✅ abstract factory pattern
- ✅ factory method pattern
- ✅ composite pattern
- ✅ builder pattern
- ✅ decorator pattern
- ✅ flyweight pattern

--------------------------------

# When do you use *interface* in your project❓
### *Ja, wenn ich ...*
### Nein, sehr selten

--------------------------------

# *Reasons(when)*
define generic algorithms 
⇢ **hide the implementation details**
loosely coupled code
⇢ **plugable modules/services**
thinking in design by contract
⇢ **easier interaction**

--------------------------------

```php
// Generic Code ???
final class StoreTimingImporter implements ApiImporterInterface
{
    private MyApiClientInterface $myApiClient;
    private TimingStorageInterface $timingStorage;

    public function __construct(MyApiClientInterface $myApiClient, TimingStorageInterface $timingStorage) 
    {
        $this->myApiClient = $myApiClient;
        $this->timingStorage = $timingStorage;
    }

    public function import(): void
    {
        $this->myApiClient->refreshAccessToken();

        $defaultOpenings = $this->myApiClient->fetchOpeningTimes();
        $holidayOpenings = $this->myApiClient->fetchHolidayOpening();

        $this->timingStorage->batchProcessOpeningTimes($defaultOpenings);
        $this->timingStorage->batchProcessHolidayOpenings($holidayOpenings);
    }
}
 
```

--------------------------------

# You must *not* use interface
-
### But if you do, your code might become *better*

--------------------------------

# Interface❓
### to *connect* two or more pieces of equipment; 
### to *communicate* with someone;
-
### **especially in a *work-related* situation.**

![left 100%](https://dictionary.cambridge.org/de/external/images/logo-lrg.png?version=5.0.230)

[.footer: source: dictionary.cambridge.org ]

--------------------------------

### 2 **Examples**
-
-
# TV Stick
# ISS Dock

[.footer: ISS: Internation Space Station]

--------------------------------

![135%](https://www.xiaomitoday.it/wp-content/uploads/2020/10/versus-mi-tv-stick-5.jpg)

[.footer: Who is the interface provider? Who is the implementation of interface?]

---------------------------------
-
-
-
-
-
-
US space shuttle, Soyuz spacecraft, SpaceX cargo, ShenZhou 5
can all dock to the International Space Station(ISS)

![fill](https://www.the-sun.com/wp-content/uploads/sites/6/2020/04/NINTCHDBPICT000577915504-2.jpg)

[.footer: Who is the interface provider? Who is the implementation of interface?]


--------------------------------

## If we depend on concretions, we might have problems in our *tests*

- 🔥 failure, if trouble on VPN or SIAM(QA)
- 🔥 failure, if trouble on Partner Restful API
- 🔥 failure, if trouble on Payment service

--------------------------------

# *interface* is the key to design good code and do good architecture in software design

[.column]

![right 75%](./assets/clean-architecture.png)

[.column]

![left fit](./assets/architecture.png)


--------------------------------

## perspective of programming in php *today*
### *Interfaces* ermöglichen die Erzeugung von Code, der spezifiziert, *welche* Methoden eine Klasse implementieren muss, ohne definieren zu müssen, *wie* diese Methoden implementiert werden.
--

### ⚠️ **How to create an interface?**
[.footer: source: definition by php.net ]

--------------------------------
--
--
You are in the middle of a large, empty room, when zombies suddenly attack you. You have no weapon. Luckily, a fellow living human is standing in the doorway of the room. "Quick!" you shout at him. *"Throw me something I can hit the zombie with!"**
--

💡 When you write an interface, you're basically saying: **"I need something that can do..."**

![fill](https://www.weltderwunder.de/wp-content/uploads/2022/01/Zombies_iStock-Grandfailure_20161026.jpg)

[.footer: https://stackoverflow.com/ ]

--------------------------------
**I need something that (I) can do ...**

▼ 
I need a HTTP client so that I can send HTTP request, and receive the response or stream the response.

--------------------------------
# class ⇢ interface

```php
interface HttpClientInterface
{
    public const OPTIONS_DEFAULTS = [
        'query' => [],  
        'headers' => [],
        'body' => '',
        ...
    ];

    public function request(string $method, string $url, array $options = []): ResponseInterface;

    public function stream($responses, float $timeout = null): ResponseStreamInterface;
}

// somewhere in your code
public function __construct(HttpClientInterface $httpClient)
{
  $this->httpClient = $httpClient;
}
```
[.column]
- keyword: interface
- methods without body

[.column]
- public constants
- public methods


[.footer: source: php.net; symfony HTTP client ]

--------------------------------
# Inheritance (Vererbung)
```php
interface Collection extends Countable, IteratorAggregate, ArrayAccess
{
     ...
     public function add($element): bool;
     public function clear(): void;
     public function isEmpty(): bool;
     public function contains(): bool;
     ...
} 
```

- Extendable

[.footer: source: php.net, Doctrine Common ]

--------------------------------
# ⏰

```bash
$minutesRemained < 90
  ? $this->focusOnEssentialUseCases(); 
  : $this->talkAboutAll();
```

--------------------------------

[.column]


### __Essential *use cases* to use interfaces__
-
## *interchangeable*
## *conform typing*
### tagging
### grouping
### contract

[.column]
-
## ✅ 
#### Anwendungsfall 
-
## 🥋 
#### Praxis: coding
-
## 👀 
#### Praxis: sample


--------------------------------

# ✅ interchangeable
## **austauschbar** 

### *Datenbankzugriff | Zahlungs-Gateways*

--------------------------------

![left 100%](https://renovieren.net/wp-content/uploads/2020/12/schraubendreher.jpg)
![right 97%](https://www.kab24.de/shop/images/products/main/detail/W77095.jpg)

[.footer: Adapter Interface]

---

# 🥋 Dojo

As a developer, I wanna create loosely coupled service *`UserManager`* which does not depend on real GitHub API.

**create an interface named UserClientInterface, that has two implementations:**
`UserClientInterface`
`UserClientGitHub`
`UserClientMock`

![left](https://i.redd.it/j3pu0tv41ax21.jpg)

[.footer: Christopher with his body double. => phpunit: Test Double]

--------------------------------

# 🥋 Dojo (*optional*)
As registration manager, I can click on the download buttons(export as csv, export as xml) to download the newly registered customers in corresponding format

**create an interface named `FileExporterInterface`, which has a method named `export()` and has the implementations: `CsvExporter`, `XmlExporter`**

![left 100%](assets/users.png)


--------------------------------

# ✅ conform typing
## mit einem **Interface konform**
-
-
## *Input Parameter*
## *Return Value*

### **Iterable**, **Cacheable**, **Renderable**, **Collection**

![fill right](./assets/interface-toll.png)

[.footer: source: php.net]
--------------------------------

# 🥋 Dojo

**Context**: Track events in Event-driven System

**Story:** As a developer, I want to have a generic method to track the history event in the service `HistoryTracker`, so that I can simplify the service.

**Test** in `HistoryTrackerTest`

![left fit](https://i0.wp.com/blog.couchbase.com/wp-content/uploads/2018/04/Screen-Shot-2018-04-11-at-4.59.17-PM.png?resize=476%2C373)

[.footer: typical implementation in Domain-driven Design]

--------------------------------

# ✅ Tagging
## *use case*

-
## 🥋 Dojo
Refactor the service named *`VoucherRedeemer`* to follow the SRP & Open-closed Principle


![left fill](https://img.elo7.com.br/product/zoom/B62CD7/mini-tag-kraft-cuide-com-carinho-mini-tag.jpg)

--------------------------------

```yaml
services:
    Swift_SmtpTransport:
        arguments: ['%mailer_host%']
        tags:
            - { name: 'app.mail_transport', alias: 'smtp' }
    _instanceof:
        # services whose classes are instances of CustomInterface 
        # will be tagged automatically
        App\Security\CustomInterface:
            tags: ['app.custom_tag']
```

[.footer: https://symfony.com/doc/current/service_container/tags.html]
--------------------------------

## ✅ Grouping
### *use case*
-
-
-
## 👀 Demo only
### Grouping the events in an *Event-driven* software

![right 150%](https://d138zd1ktt9iqe.cloudfront.net/media/seo_landing_files/file-1-arx3ankihcykztmx5m55bw-1608646114.png)

--------------------------------

## ✅ thinking in term of "*contract*"
### *use case*
-
-
## 👀 Demo Only
### contract: among the *modules/packages*
### contract: between the *application* layer and *infrastructure*

![fit right](https://docucollab.com/wp-content/uploads/2018/11/contract-850x429.jpg)

--------------------------------

###  __Review__
### *user cases*
-
-
### interchangeable
### conform typing
### tagging
### grouping
### contract

--------------------------------

### trade-off
# Public v.s. *Published*
####  2002© Martin Fowler

### *interface* might break all clients. 
### *abstract class* will not publish the method. 
#### In the light of evolution you should consider whether an *abstract class is sufficient*.

[.footer: source: https://www.artima.com/articles/design-principles-from-design-patterns]

--------------------------------
### **Maybe next time**
-
-
# Better OOP with **Abstract Class**
-
-
-
### **My last question to you about code design** 👉

![left fit](./assets/abstract-class.png)

[.background-color: #FFFFFF]

--------------------------------

## One Service with *1000* lines
#### 1 file
## ⚔️
## *5* interfaces + *10* Services, each service with *100* lines
#### 15 files
-
### *Interface ⇢ complexer ?*

[.footer: Which one is better? No golden rule! Plz do code review, but do well! ✅]

--------------------------------

### *Unibody* Design ⚔️ *Plugable* Design
-
-
-
#### *Mental Model* for design

![left](https://images.bild.de/60a375f5220cde000142d5bc/f92c8df3978c6818265405bfaeb6d915/18/2?w=992)
![right](https://nzxt.com/assets/cms/34299/1627488599-streamerpc1-white-2000x2000-hero.png?ar=1%3A1&auto=format&fit=crop&h=400&w=400)

--------------------------------

# Q&A
-
-
## **Thanks, enjoy your 👨🏻‍💻 day!**

--------------------------------

--------------------------------

# ✅ interchangeable

Um Entwicklern zu ermöglichen, Objekte verschiedener Klassen zu erstellen, die austauschbar verwendet werden können, weil sie das gleiche Interface oder die gleichen Interfaces implementieren. Ein häufiges Beispiel sind mehrere Dienste für den Datenbankzugriff, mehrere Zahlungs-Gateways oder unterschiedliche Caching-Strategien. Verschiedene Implementierungen können ausgetauscht werden, ohne dass Änderungen am Code vorgenommen werden müssen, der sie verwendet.

[.footer: source: php.net]
--------------------------------

# ✅ conform typing

Um einer Funktion oder Methode zu ermöglichen, einen **Parameter** zu akzeptieren und zu bearbeiten, der der mit einem **Interface konform** ist, ohne sich darum zu kümmern, was das Objekt sonst noch tun kann oder wie es implementiert ist. Diese Interfaces werden oft benannt als **Iterable**, **Cacheable**, **Renderable**, oder so weiter, um die Bedeutung des des Verhaltens zu beschreiben

[.footer: source: php.net]
