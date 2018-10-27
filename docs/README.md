## Table of contents

- [\GeelbeChallenge\GeelbeChallenge](#class-geelbechallengegeelbechallenge)
- [\GeelbeChallenge\Calculators\CalcFiveMultiple](#class-geelbechallengecalculatorscalcfivemultiple)
- [\GeelbeChallenge\Calculators\AbstractCalculator (abstract)](#class-geelbechallengecalculatorsabstractcalculator-abstract)
- [\GeelbeChallenge\Calculators\CalcThreeMultiple](#class-geelbechallengecalculatorscalcthreemultiple)
- [\GeelbeChallenge\Calculators\Handler (interface)](#interface-geelbechallengecalculatorshandler)
- [\GeelbeChallenge\Calculators\CalcDefault](#class-geelbechallengecalculatorscalcdefault)
- [\GeelbeChallenge\Calculators\CalcThreeAndFiveMultiple](#class-geelbechallengecalculatorscalcthreeandfivemultiple)

<hr />

### Class: \GeelbeChallenge\GeelbeChallenge

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLimitNumber()</strong> : <em>int</em> |
| public | <strong>run()</strong> : <em>void</em> |
| public | <strong>setLimitNumber(</strong><em>mixed</em> <strong>$limitNumber</strong>)</strong> : <em>void</em> |

<hr />

### Class: \GeelbeChallenge\Calculators\CalcFiveMultiple

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLabel(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>string</em> |
| public | <strong>isMultiple(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> |

*This class extends [\GeelbeChallenge\Calculators\AbstractCalculator](#class-geelbechallengecalculatorsabstractcalculator-abstract)*

*This class implements [\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)*

<hr />

### Class: \GeelbeChallenge\Calculators\AbstractCalculator (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getNext()</strong> : <em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> |
| public | <strong>handle(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>mixed</em> |
| public | <strong>setNext(</strong><em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> <strong>$handler</strong>)</strong> : <em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> |

*This class implements [\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)*

<hr />

### Class: \GeelbeChallenge\Calculators\CalcThreeMultiple

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLabel(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>string</em> |
| public | <strong>isMultiple(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> |

*This class extends [\GeelbeChallenge\Calculators\AbstractCalculator](#class-geelbechallengecalculatorsabstractcalculator-abstract)*

*This class implements [\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)*

<hr />

### Interface: \GeelbeChallenge\Calculators\Handler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLabel(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>mixed</em> |
| public | <strong>handle(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>mixed</em> |
| public | <strong>isMultiple(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>mixed</em> |
| public | <strong>setNext(</strong><em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> <strong>$handler</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \GeelbeChallenge\Calculators\CalcDefault

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLabel(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>mixed</em> |
| public | <strong>isMultiple(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> |

*This class extends [\GeelbeChallenge\Calculators\AbstractCalculator](#class-geelbechallengecalculatorsabstractcalculator-abstract)*

*This class implements [\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)*

<hr />

### Class: \GeelbeChallenge\Calculators\CalcThreeAndFiveMultiple

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getLabel(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>string</em> |
| public | <strong>isMultiple(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>[\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)</em> |

*This class extends [\GeelbeChallenge\Calculators\AbstractCalculator](#class-geelbechallengecalculatorsabstractcalculator-abstract)*

*This class implements [\GeelbeChallenge\Calculators\Handler](#interface-geelbechallengecalculatorshandler)*

