##### how it work

-> 1) make an interface to the all futeure you want

AbstractFactoryUI/
│
├── Interfaces/
│ ├── Button.php
│ └── Checkbox.php
│
├── LightTheme/
│ ├── LightButton.php
│ ├── LightCheckbox.php
│ └── LightUIFactory.php
│
├── DarkTheme/
│ ├── DarkButton.php
│ ├── DarkCheckbox.php
│ └── DarkUIFactory.php
│
├── Factory/
│ └── UIFactory.php
│
├── main.php
└── autoload.php
