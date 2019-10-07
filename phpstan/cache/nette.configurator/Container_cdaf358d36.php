<?php
// source: /Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/conf/config.neon
// source: /Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/conf/config.level7.neon
// source: /Users/pro15/Documents/other/blacklist-bundle/phpstan.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_cdaf358d36 extends Nette\DI\Container
{
	protected $tags = [
		'phpstan.phpDoc.typeNodeResolverExtension' => ['015' => true],
		'phpstan.broker.propertiesClassReflectionExtension' => ['035' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'050' => true,
			'051' => true,
			'052' => true,
			'053' => true,
			'055' => true,
			'056' => true,
			'057' => true,
			'058' => true,
			'059' => true,
			'060' => true,
			'061' => true,
			'062' => true,
			'063' => true,
			'064' => true,
			'065' => true,
			'066' => true,
			'067' => true,
			'068' => true,
			'069' => true,
			'070' => true,
			'071' => true,
			'074' => true,
			'075' => true,
			'076' => true,
			'077' => true,
			'078' => true,
			'079' => true,
			'080' => true,
			'081' => true,
			'082' => true,
			'083' => true,
			'0103' => true,
			'0104' => true,
			'0105' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'054' => true,
			'072' => true,
			'073' => true,
			'084' => true,
			'085' => true,
			'086' => true,
			'087' => true,
			'088' => true,
			'089' => true,
			'090' => true,
			'091' => true,
			'092' => true,
			'093' => true,
			'094' => true,
			'095' => true,
			'096' => true,
			'097' => true,
			'098' => true,
			'099' => true,
			'0100' => true,
			'0101' => true,
			'0102' => true,
			'0135' => true,
		],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'071' => true,
			'0130' => true,
			'0131' => true,
			'0132' => true,
			'0133' => true,
			'0134' => true,
			'0138' => true,
			'0139' => true,
			'0140' => true,
		],
		'phpstan.rules.rule' => [
			'0106' => true,
			'0107' => true,
			'0108' => true,
			'0109' => true,
			'0110' => true,
			'0111' => true,
			'0112' => true,
			'0113' => true,
			'0114' => true,
			'0115' => true,
			'0116' => true,
			'0117' => true,
			'0118' => true,
			'0119' => true,
			'0120' => true,
			'0121' => true,
			'0122' => true,
			'0123' => true,
			'0124' => true,
			'0125' => true,
			'0126' => true,
			'0127' => true,
			'0128' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.15' => true,
			'rules.16' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.23' => true,
			'rules.24' => true,
			'rules.25' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.43' => true,
			'rules.44' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
		'phpstan.broker.methodsClassReflectionExtension' => ['0129' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0136' => true],
		'phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension' => ['0137' => true],
	];

	protected $types = ['container' => 'Nette\DI\Container', 'relativePathHelper' => 'PHPStan\File\RelativePathHelper'];

	protected $aliases = [];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'0106',
				'0107',
				'0108',
				'0109',
				'0110',
				'0111',
				'0112',
				'0113',
				'0114',
				'0115',
				'0116',
				'0117',
				'0118',
				'0119',
				'0120',
				'0121',
				'0122',
				'0123',
				'0124',
				'0125',
				'0126',
				'0127',
				'0128',
			],
			2 => [
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
				'rules.43',
				'rules.44',
			],
		],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [2 => ['rules.0']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [2 => ['rules.1']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [2 => ['rules.2']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [2 => ['rules.4']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Classes\InstantiationRule' => [2 => ['rules.6']],
		'PHPStan\Rules\Classes\RequireParentConstructCallRule' => [2 => ['rules.7']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [2 => ['rules.8']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [2 => ['rules.9']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [2 => ['rules.10']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [2 => ['rules.11']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [2 => ['rules.12']],
		'PHPStan\Rules\Functions\NonExistentDefinedFunctionRule' => [2 => ['rules.13']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [2 => ['rules.14']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [2 => ['rules.15']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [2 => ['rules.16']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [2 => ['rules.17']],
		'PHPStan\Rules\Variables\ThisVariableRule' => [2 => ['rules.18']],
		'PHPStan\Rules\Constants\ConstantRule' => [2 => ['rules.19']],
		'PHPStan\Rules\Variables\VariableCertaintyInIssetRule' => [2 => ['rules.20']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [2 => ['rules.21']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [2 => ['rules.22']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [2 => ['rules.23']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [2 => ['rules.24']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [2 => ['rules.25']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [2 => ['rules.26']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [2 => ['rules.27']],
		'PHPStan\Rules\Arrays\AppendedArrayItemTypeRule' => [2 => ['rules.28']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [2 => ['rules.29']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [2 => ['rules.30']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [2 => ['rules.31']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [2 => ['rules.32']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [2 => ['rules.33']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [2 => ['rules.34']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [2 => ['rules.35']],
		'PHPStan\Rules\Variables\ThrowTypeRule' => [2 => ['rules.36']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [2 => ['rules.37']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [2 => ['rules.38']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [2 => ['rules.39']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [2 => ['rules.40']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [2 => ['rules.41']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [2 => ['rules.42']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [2 => ['rules.43']],
		'PHPStan\Rules\Cast\UselessCastRule' => [2 => ['rules.44']],
		'PhpParser\BuilderFactory' => [['01']],
		'PhpParser\Lexer' => [['02']],
		'PhpParser\NodeTraverserInterface' => [['03']],
		'PhpParser\NodeTraverser' => [['03']],
		'PhpParser\NodeVisitorAbstract' => [['04']],
		'PhpParser\NodeVisitor' => [['04']],
		'PhpParser\NodeVisitor\NameResolver' => [['04']],
		'PhpParser\ParserAbstract' => [['05']],
		'PhpParser\Parser' => [['05']],
		'PhpParser\Parser\Php7' => [['05']],
		'PhpParser\PrettyPrinterAbstract' => [['06']],
		'PhpParser\PrettyPrinter\Standard' => [['06']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['07']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['08']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['09']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['010']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['011']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['012']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['013']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['014']],
		'PHPStan\PhpDoc\TypeNodeResolverExtension' => [['015']],
		'PHPStan\PhpDoc\TypeNodeResolverAwareExtension' => [['015']],
		'PHPStan\PhpDoc\PhpUnit\MockObjectTypeNodeResolverExtension' => [['015']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['016']],
		'PHPStan\Analyser\Analyser' => [['017']],
		'PHPStan\Analyser\ScopeFactory' => [['018']],
		'PHPStan\Analyser\NodeScopeResolver' => [['019']],
		'PHPStan\Cache\Cache' => [['020']],
		'PHPStan\Command\AnalyseApplication' => [['021']],
		'PHPStan\Dependency\DependencyDumper' => [['022']],
		'PHPStan\Dependency\DependencyResolver' => [['023']],
		'PHPStan\File\FileHelper' => [['024']],
		'PHPStan\File\FileExcluder' => [['025']],
		'PHPStan\File\FileFinder' => [['026']],
		'PHPStan\Parser\Parser' => [['027'], 2 => [1 => 'directParser']],
		'PHPStan\Parser\CachedParser' => [['027']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['028']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['029']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['030', '032', '0129']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['030']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['031', '032', '033', '035']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['031']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['032', '035', '069', '0104', '0129', '0140']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['032']],
		'PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension' => [['033']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['034']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['035']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['036']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['037']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['038']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['039']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['040']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['041']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['042']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['043']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['044']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['045']],
		'PHPStan\Rules\RegistryFactory' => [['046']],
		'PHPStan\Rules\RuleLevelHelper' => [['047']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['048']],
		'PHPStan\Type\FileTypeMapper' => [['049']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'050',
				'051',
				'052',
				'053',
				'055',
				'056',
				'057',
				'058',
				'059',
				'060',
				'061',
				'062',
				'063',
				'064',
				'065',
				'066',
				'067',
				'068',
				'069',
				'070',
				'071',
				'074',
				'075',
				'076',
				'077',
				'078',
				'079',
				'080',
				'081',
				'082',
				'083',
				'0103',
				'0104',
				'0105',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['050']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['051']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['052']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['053']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'054',
				'072',
				'073',
				'084',
				'085',
				'086',
				'087',
				'088',
				'089',
				'090',
				'091',
				'092',
				'093',
				'094',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0135',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'054',
				'072',
				'073',
				'084',
				'085',
				'086',
				'087',
				'088',
				'089',
				'090',
				'091',
				'092',
				'093',
				'094',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0104',
				'0135',
				'0136',
				'0137',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['054']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['055']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['056']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['057']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['058']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['059']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['060']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['061']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['062']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['063']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['064']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['065']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['066']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['067']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['068']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['069']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['070']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [['071', '0130', '0131', '0132', '0133', '0134', '0138', '0139', '0140']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['071']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['072']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['073']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['074']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['075']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['076']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['077']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['078']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['079']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['080']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['081']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['082']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['083']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['084']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['085']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['086']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['087']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['088']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['089']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['090']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['091']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['092']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['093']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['094']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['095']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['096']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['097']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['098']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['099']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0100']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0101']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0102']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0103']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0104']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0105']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [['relativePathHelper']],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\DirectParser' => [2 => ['directParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\TypeNodeResolverFactory' => [['typeNodeResolverFactory']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.prettyJson',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0106']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0107']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0108']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['0109']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['0110']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0111']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0112']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0113']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0114']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0115']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0116']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0117']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0118']],
		'PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule' => [['0119']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0120']],
		'PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule' => [['0121']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0122']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0123']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0124']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0125']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0126']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0127']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0128']],
		'PHPStan\Reflection\Doctrine\DoctrineSelectableClassReflectionExtension' => [['0129']],
		'PHPStan\Type\Doctrine\DoctrineSelectableDynamicReturnTypeExtension' => [['0130']],
		'PHPStan\Type\Doctrine\EntityManagerFindDynamicReturnTypeExtension' => [['0131']],
		'PHPStan\Type\Doctrine\EntityManagerGetRepositoryDynamicReturnTypeExtension' => [['0132']],
		'PHPStan\Type\Doctrine\ObjectManagerMergeDynamicReturnTypeExtension' => [['0133']],
		'PHPStan\Type\Doctrine\EntityRepositoryDynamicReturnTypeExtension' => [['0134']],
		'PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension' => [['0135']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0136']],
		'PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension' => [['0136']],
		'PHPStan\Type\StaticMethodTypeSpecifyingExtension' => [['0137']],
		'PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension' => [['0137']],
		'PHPStan\Type\PHPUnit\CreateMockDynamicReturnTypeExtension' => [['0138']],
		'PHPStan\Type\PHPUnit\GetMockBuilderDynamicReturnTypeExtension' => [['0139']],
		'PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension' => [['0140']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrap' => null,
			'excludes_analyse' => [
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../vendor',
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../phpstan',
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../Validator/Constraints/*',
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../DependencyInjection/*',
			],
			'autoload_directories' => [],
			'autoload_files' => ['vendor/bin/.phpunit/phpunit-7.4/vendor/autoload.php'],
			'fileExtensions' => ['php'],
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => true,
			'checkFunctionArgumentTypes' => true,
			'checkFunctionNameCase' => false,
			'checkArgumentsPassedByReference' => true,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => true,
			'checkThisOnly' => false,
			'checkUnionTypes' => true,
			'reportMaybes' => true,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [
				'#Access to an undefined property Symfony\\\Component\\\Validator\\\Constraint(.+)#',
				'#Property (.+) \((.+)Repository\) does not accept Doctrine\\\ORM\\\EntityRepository(.+).#',
			],
			'internalErrorsCountLimit' => 50,
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\Scope',
			'universalObjectCratesClasses' => ['stdClass', 'SimpleXMLElement'],
			'earlyTerminatingMethodCalls' => ['PHPUnit\Framework\TestCase' => ['fail', 'markTestIncomplete', 'markTestSkipped']],
			'memoryLimitFile' => '/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../phpstan/.memory_limit',
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'PHP_VERSION',
				'PHP_EXTRA_VERSION',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
			],
			'customRulesetUsed' => false,
			'doctrine' => ['repositoryClass' => 'Doctrine\ORM\EntityRepository'],
			'paths' => ['.'],
			'level' => 7,
			'tmpDir' => '/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../phpstan',
			'appDir' => '/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/src/DependencyInjection',
			'wwwDir' => '/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/bin',
			'vendorDir' => '/Users/pro15/Documents/other/blacklist-bundle/vendor',
			'debugMode' => true,
			'productionMode' => false,
			'consoleMode' => true,
			'tempDir' => '/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../phpstan',
			'rootDir' => '/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/pro15/Documents/other/blacklist-bundle',
			'cliArgumentsVariablesRegistered' => true,
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PhpParser\Lexer
	{
		return new PhpParser\Lexer;
	}


	public function createService03(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('04'));
		return $service;
	}


	public function createService04(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver;
	}


	public function createService05(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('02'));
	}


	public function createService06(): PhpParser\PrettyPrinter\Standard
	{
		return new PhpParser\PrettyPrinter\Standard;
	}


	public function createService07(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('024'), $this->getService('relativePathHelper'));
	}


	public function createService08(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService09(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser;
	}


	public function createService010(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser;
	}


	public function createService011(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('09'), $this->getService('010'));
	}


	public function createService012(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('014'));
	}


	public function createService013(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('08'), $this->getService('011'), $this->getService('012'));
	}


	public function createService014(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return $this->getService('typeNodeResolverFactory')->create();
	}


	public function createService015(): PHPStan\PhpDoc\PhpUnit\MockObjectTypeNodeResolverExtension
	{
		return new PHPStan\PhpDoc\PhpUnit\MockObjectTypeNodeResolverExtension;
	}


	public function createService016(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('08'), $this->getService('09'), $this->getService('014'));
	}


	public function createService017(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('018'),
			$this->getService('027'),
			$this->getService('registry'),
			$this->getService('019'),
			[
				'#Access to an undefined property Symfony\\\Component\\\Validator\\\Constraint(.+)#',
				'#Property (.+) \((.+)Repository\) does not accept Doctrine\\\ORM\\\EntityRepository(.+).#',
			],
			true,
			50
		);
	}


	public function createService018(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory(
			'PHPStan\Analyser\Scope',
			$this->getService('broker'),
			$this->getService('06'),
			$this->getService('typeSpecifier'),
			[
				'ICONV_IMPL',
				'PHP_VERSION',
				'PHP_EXTRA_VERSION',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
			]
		);
	}


	public function createService019(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('broker'),
			$this->getService('027'),
			$this->getService('049'),
			$this->getService('024'),
			$this->getService('typeSpecifier'),
			true,
			false,
			['PHPUnit\Framework\TestCase' => ['fail', 'markTestIncomplete', 'markTestSkipped']]
		);
	}


	public function createService020(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService021(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('017'),
			'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../phpstan/.memory_limit',
			$this->getService('024'),
			'/Users/pro15/Documents/other/blacklist-bundle'
		);
	}


	public function createService022(): PHPStan\Dependency\DependencyDumper
	{
		return new PHPStan\Dependency\DependencyDumper(
			$this->getService('023'),
			$this->getService('019'),
			$this->getService('024'),
			$this->getService('027'),
			$this->getService('018'),
			$this->getService('026')
		);
	}


	public function createService023(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver($this->getService('broker'));
	}


	public function createService024(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/pro15/Documents/other/blacklist-bundle');
	}


	public function createService025(): PHPStan\File\FileExcluder
	{
		return new PHPStan\File\FileExcluder(
			$this->getService('024'),
			[
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../vendor',
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../phpstan',
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../Validator/Constraints/*',
				'/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../DependencyInjection/*',
			]
		);
	}


	public function createService026(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('025'), $this->getService('024'), ['php']);
	}


	public function createService027(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('directParser'));
	}


	public function createService028(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService029(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_cdaf358d36 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('027'),
					$this->container->getService('028'),
					$this->container->getService('020'),
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename
				);
			}
		};
	}


	public function createService030(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension($this->getService('049'));
	}


	public function createService031(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension($this->getService('049'));
	}


	public function createService032(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('034'),
			$this->getService('049'),
			$this->getService('030'),
			$this->getService('031'),
			$this->getService('037')
		);
	}


	public function createService033(): PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension
	{
		return new PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension($this->getService('016'));
	}


	public function createService034(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_cdaf358d36 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('broker'),
					$this->container->getService('027'),
					$this->container->getService('028'),
					$this->container->getService('020'),
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$isDeprecated,
					$isInternal,
					$isFinal
				);
			}
		};
	}


	public function createService035(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass', 'SimpleXMLElement']);
	}


	public function createService036(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('016'));
	}


	public function createService037(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProvider($this->getService('036'));
	}


	public function createService038(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('broker'));
	}


	public function createService039(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('040'));
	}


	public function createService040(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper($this->getService('broker'), $this->getService('typeSpecifier'));
	}


	public function createService041(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck($this->getService('047'), true, true);
	}


	public function createService042(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck($this->getService('broker'), $this->getService('038'), true, false);
	}


	public function createService043(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('047'));
	}


	public function createService044(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService045(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService046(): PHPStan\Rules\RegistryFactory
	{
		return new PHPStan\Rules\RegistryFactory($this);
	}


	public function createService047(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper($this->getService('broker'), true, false, true);
	}


	public function createService048(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck;
	}


	public function createService049(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('027'),
			$this->getService('013'),
			$this->getService('020'),
			$this->getService('07'),
			$this->getService('014')
		);
	}


	public function createService050(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService051(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension;
	}


	public function createService052(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
	}


	public function createService053(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService054(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService055(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService056(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService057(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
	}


	public function createService058(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService059(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService060(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService061(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService062(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService063(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
	}


	public function createService064(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
	}


	public function createService065(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService066(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService067(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService068(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension;
	}


	public function createService069(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension;
	}


	public function createService070(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService071(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService072(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService073(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension;
	}


	public function createService074(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
	}


	public function createService075(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
	}


	public function createService076(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService077(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService078(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
	}


	public function createService079(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension;
	}


	public function createService080(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService081(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService082(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService083(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService084(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService085(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService086(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
	}


	public function createService087(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService088(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
	}


	public function createService089(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
	}


	public function createService090(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
	}


	public function createService091(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
	}


	public function createService092(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
	}


	public function createService093(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension;
	}


	public function createService094(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
	}


	public function createService095(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
	}


	public function createService096(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService097(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
	}


	public function createService098(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
	}


	public function createService099(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
	}


	public function createService0100(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
	}


	public function createService0101(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
	}


	public function createService0102(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
	}


	public function createService0103(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension;
	}


	public function createService0104(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension;
	}


	public function createService0105(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
	}


	public function createService0106(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule($this->getService('broker'), $this->getService('038'), true);
	}


	public function createService0107(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule($this->getService('broker'), $this->getService('038'), true);
	}


	public function createService0108(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('broker'), false);
	}


	public function createService0109(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule($this->getService('broker'), $this->getService('041'), $this->getService('047'), false, true);
	}


	public function createService0110(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule(
			$this->getService('broker'),
			$this->getService('041'),
			$this->getService('047'),
			$this->getService('038'),
			false,
			true
		);
	}


	public function createService0111(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule($this->getService('broker'), $this->getService('038'), false);
	}


	public function createService0112(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule($this->getService('broker'), $this->getService('038'), false);
	}


	public function createService0113(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule(false);
	}


	public function createService0114(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule($this->getService('broker'), $this->getService('047'), true);
	}


	public function createService0115(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule($this->getService('broker'), $this->getService('038'), true);
	}


	public function createService0116(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule($this->getService('047'), $this->getService('044'), $this->getService('045'), false);
	}


	public function createService0117(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule($this->getService('044'), $this->getService('045'), $this->getService('047'), false);
	}


	public function createService0118(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0119(): PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableInAnonymousFunctionUseRule(true);
	}


	public function createService0120(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('041'), $this->getService('047'), true);
	}


	public function createService0121(): PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule
	{
		return new PHPStan\Rules\Arrays\AppendedArrayKeyTypeRule($this->getService('045'), true);
	}


	public function createService0122(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule(true);
	}


	public function createService0123(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(true);
	}


	public function createService0124(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule(false);
	}


	public function createService0125(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('040'), false);
	}


	public function createService0126(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('040'), false);
	}


	public function createService0127(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('040'), false);
	}


	public function createService0128(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule(false);
	}


	public function createService0129(): PHPStan\Reflection\Doctrine\DoctrineSelectableClassReflectionExtension
	{
		return new PHPStan\Reflection\Doctrine\DoctrineSelectableClassReflectionExtension;
	}


	public function createService0130(): PHPStan\Type\Doctrine\DoctrineSelectableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Doctrine\DoctrineSelectableDynamicReturnTypeExtension;
	}


	public function createService0131(): PHPStan\Type\Doctrine\EntityManagerFindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Doctrine\EntityManagerFindDynamicReturnTypeExtension;
	}


	public function createService0132(): PHPStan\Type\Doctrine\EntityManagerGetRepositoryDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Doctrine\EntityManagerGetRepositoryDynamicReturnTypeExtension('Doctrine\ORM\EntityRepository');
	}


	public function createService0133(): PHPStan\Type\Doctrine\ObjectManagerMergeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Doctrine\ObjectManagerMergeDynamicReturnTypeExtension;
	}


	public function createService0134(): PHPStan\Type\Doctrine\EntityRepositoryDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Doctrine\EntityRepositoryDynamicReturnTypeExtension;
	}


	public function createService0135(): PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0136(): PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension;
	}


	public function createService0137(): PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension;
	}


	public function createService0138(): PHPStan\Type\PHPUnit\CreateMockDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\CreateMockDynamicReturnTypeExtension;
	}


	public function createService0139(): PHPStan\Type\PHPUnit\GetMockBuilderDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\GetMockBuilderDynamicReturnTypeExtension;
	}


	public function createService0140(): PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension;
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this);
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/pro15/Documents/other/blacklist-bundle/vendor/phpstan/phpstan/../../../phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_cdaf358d36
	{
		return $this;
	}


	public function createServiceDirectParser(): PHPStan\Parser\DirectParser
	{
		return new PHPStan\Parser\DirectParser($this->getService('05'), $this->getService('03'));
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('relativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'));
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		return $this->getService('046')->create();
	}


	public function createServiceRelativePathHelper(): void
	{
		throw new Nette\DI\ServiceCreationException('Unable to create imported service \'relativePathHelper\', it must be added using addService()');
	}


	public function createServiceRules__0(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('06'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule($this->getService('broker'), $this->getService('047'), $this->getService('038'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('042'));
	}


	public function createServiceRules__11(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('042'));
	}


	public function createServiceRules__12(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__13(): PHPStan\Rules\Functions\NonExistentDefinedFunctionRule
	{
		return new PHPStan\Rules\Functions\NonExistentDefinedFunctionRule($this->getService('broker'));
	}


	public function createServiceRules__14(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule;
	}


	public function createServiceRules__15(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('048'));
	}


	public function createServiceRules__16(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('042'));
	}


	public function createServiceRules__17(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule($this->getService('broker'), $this->getService('047'), $this->getService('038'));
	}


	public function createServiceRules__18(): PHPStan\Rules\Variables\ThisVariableRule
	{
		return new PHPStan\Rules\Variables\ThisVariableRule;
	}


	public function createServiceRules__19(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule;
	}


	public function createServiceRules__2(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule($this->getService('038'));
	}


	public function createServiceRules__20(): PHPStan\Rules\Variables\VariableCertaintyInIssetRule
	{
		return new PHPStan\Rules\Variables\VariableCertaintyInIssetRule;
	}


	public function createServiceRules__21(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('broker'), $this->getService('047'));
	}


	public function createServiceRules__22(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('06'));
	}


	public function createServiceRules__23(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('06'), $this->getService('047'));
	}


	public function createServiceRules__24(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule;
	}


	public function createServiceRules__25(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule($this->getService('049'));
	}


	public function createServiceRules__26(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('08'), $this->getService('011'));
	}


	public function createServiceRules__27(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('049'));
	}


	public function createServiceRules__28(): PHPStan\Rules\Arrays\AppendedArrayItemTypeRule
	{
		return new PHPStan\Rules\Arrays\AppendedArrayItemTypeRule($this->getService('045'), $this->getService('047'));
	}


	public function createServiceRules__29(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('047'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule($this->getService('038'));
	}


	public function createServiceRules__30(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule($this->getService('047'));
	}


	public function createServiceRules__31(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('043'));
	}


	public function createServiceRules__32(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('043'));
	}


	public function createServiceRules__33(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('043'));
	}


	public function createServiceRules__34(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('047'));
	}


	public function createServiceRules__35(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule($this->getService('047'), $this->getService('044'), $this->getService('045'));
	}


	public function createServiceRules__36(): PHPStan\Rules\Variables\ThrowTypeRule
	{
		return new PHPStan\Rules\Variables\ThrowTypeRule($this->getService('047'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('047'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('039'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('039'));
	}


	public function createServiceRules__4(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule($this->getService('038'));
	}


	public function createServiceRules__40(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('039'));
	}


	public function createServiceRules__41(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('039'));
	}


	public function createServiceRules__42(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('039'));
	}


	public function createServiceRules__43(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('039'));
	}


	public function createServiceRules__44(): PHPStan\Rules\Cast\UselessCastRule
	{
		return new PHPStan\Rules\Cast\UselessCastRule;
	}


	public function createServiceRules__5(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('038'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule($this->getService('broker'), $this->getService('041'), $this->getService('038'));
	}


	public function createServiceRules__7(): PHPStan\Rules\Classes\RequireParentConstructCallRule
	{
		return new PHPStan\Rules\Classes\RequireParentConstructCallRule;
	}


	public function createServiceRules__8(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('048'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule($this->getService('broker'), $this->getService('041'));
	}


	public function createServiceTypeNodeResolverFactory(): PHPStan\PhpDoc\TypeNodeResolverFactory
	{
		return new PHPStan\PhpDoc\TypeNodeResolverFactory($this);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this);
	}


	public function initialize()
	{
	}
}
