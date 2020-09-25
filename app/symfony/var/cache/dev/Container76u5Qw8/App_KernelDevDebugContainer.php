<?php

namespace Container76u5Qw8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class App_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Controller\\Admin\\CityCrudController' => 'getCityCrudControllerService',
            'App\\Controller\\Admin\\DashboardController' => 'getDashboardControllerService',
            'App\\Controller\\Admin\\HelpCrudController' => 'getHelpCrudControllerService',
            'App\\Controller\\Admin\\UserCrudController' => 'getUserCrudControllerService',
            'App\\Controller\\Api\\CheckGmailUser' => 'getCheckGmailUserService',
            'App\\Controller\\Api\\CreateUser' => 'getCreateUserService',
            'App\\Controller\\Api\\EnabledUser' => 'getEnabledUserService',
            'App\\Controller\\DefaultController' => 'getDefaultControllerService',
            'App\\Controller\\Security\\SecurityController' => 'getSecurityControllerService',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand' => 'getMakeAdminDashboardCommandService',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand' => 'getMakeAdminMigrationCommandService',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand' => 'getMakeCrudControllerCommandService',
            'Faker\\Generator' => 'getGeneratorService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService',
            'Translation\\Bundle\\Catalogue\\CatalogueCounter' => 'getCatalogueCounterService',
            'Translation\\Bundle\\Catalogue\\CatalogueFetcher' => 'getCatalogueFetcherService',
            'Translation\\Bundle\\Catalogue\\CatalogueManager' => 'getCatalogueManagerService',
            'Translation\\Bundle\\Catalogue\\CatalogueWriter' => 'getCatalogueWriterService',
            'Translation\\Bundle\\Command\\CheckMissingCommand' => 'getCheckMissingCommandService',
            'Translation\\Bundle\\Command\\DeleteObsoleteCommand' => 'getDeleteObsoleteCommandService',
            'Translation\\Bundle\\Command\\DownloadCommand' => 'getDownloadCommandService',
            'Translation\\Bundle\\Command\\ExtractCommand' => 'getExtractCommandService',
            'Translation\\Bundle\\Command\\StatusCommand' => 'getStatusCommandService',
            'Translation\\Bundle\\Command\\SyncCommand' => 'getSyncCommandService',
            'Translation\\Bundle\\Controller\\SymfonyProfilerController' => 'getSymfonyProfilerControllerService',
            'Translation\\Bundle\\Controller\\WebUIController' => 'getWebUIControllerService',
            'Translation\\Bundle\\Service\\CacheClearer' => 'getCacheClearerService',
            'Translation\\Bundle\\Service\\ConfigurationManager' => 'getConfigurationManagerService',
            'Translation\\Bundle\\Service\\Importer' => 'getImporterService',
            'Translation\\Bundle\\Service\\StorageManager' => 'getStorageManagerService',
            'Vich\\UploaderBundle\\Naming\\Base64Namer' => 'getBase64NamerService',
            'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer' => 'getCurrentDateTimeDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\HashNamer' => 'getHashNamerService',
            'Vich\\UploaderBundle\\Naming\\OrignameNamer' => 'getOrignameNamerService',
            'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer' => 'getPropertyDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\PropertyNamer' => 'getPropertyNamerService',
            'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer' => 'getSmartUniqueNamerService',
            'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer' => 'getSubdirDirectoryNamerService',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer' => 'getUniqidNamerService',
            'Vich\\UploaderBundle\\Naming\\UniqidNamer.city_images' => 'getUniqidNamer_CityImagesService',
            'api_platform.action.documentation' => 'getApiPlatform_Action_DocumentationService',
            'api_platform.action.entrypoint' => 'getApiPlatform_Action_EntrypointService',
            'api_platform.action.exception' => 'getApiPlatform_Action_ExceptionService',
            'api_platform.action.not_found' => 'getApiPlatform_Action_NotFoundService',
            'api_platform.action.placeholder' => 'getApiPlatform_Action_PlaceholderService',
            'api_platform.graphql.action.entrypoint' => 'getApiPlatform_Graphql_Action_EntrypointService',
            'api_platform.graphql.action.graphiql' => 'getApiPlatform_Graphql_Action_GraphiqlService',
            'api_platform.graphql.action.graphql_playground' => 'getApiPlatform_Graphql_Action_GraphqlPlaygroundService',
            'api_platform.jsonld.action.context' => 'getApiPlatform_Jsonld_Action_ContextService',
            'api_platform.swagger.action.ui' => 'getApiPlatform_Swagger_Action_UiService',
            'cache.app' => 'getCache_AppService',
            'cache.app_clearer' => 'getCache_AppClearerService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system_clearer' => 'getCache_SystemClearerService',
            'cache_clearer' => 'getCacheClearer2Service',
            'cache_warmer' => 'getCacheWarmerService',
            'console.command.public_alias.api_platform.json_schema.json_schema_generate_command' => 'getConsole_Command_PublicAlias_ApiPlatform_JsonSchema_JsonSchemaGenerateCommandService',
            'console.command.public_alias.api_platform.swagger.command.swagger_command' => 'getConsole_Command_PublicAlias_ApiPlatform_Swagger_Command_SwaggerCommandService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'error_controller' => 'getErrorControllerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'fidry_alice_data_fixtures.loader.doctrine' => 'getFidryAliceDataFixtures_Loader_DoctrineService',
            'fidry_alice_data_fixtures.persistence.persister.doctrine' => 'getFidryAliceDataFixtures_Persistence_Persister_DoctrineService',
            'fidry_alice_data_fixtures.persistence.purger_factory.doctrine' => 'getFidryAliceDataFixtures_Persistence_PurgerFactory_DoctrineService',
            'filesystem' => 'getFilesystemService',
            'form.factory' => 'getForm_FactoryService',
            'form.type.file' => 'getForm_Type_FileService',
            'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command' => 'getHautelookAlice_Console_Command_Doctrine_DoctrineOrmLoadDataFixturesCommandService',
            'hautelook_alice.data_fixtures.append_loader' => 'getHautelookAlice_DataFixtures_AppendLoaderService',
            'hautelook_alice.data_fixtures.purge_loader' => 'getHautelookAlice_DataFixtures_PurgeLoaderService',
            'hautelook_alice.loader' => 'getHautelookAlice_LoaderService',
            'hautelook_alice.locator' => 'getHautelookAlice_LocatorService',
            'hautelook_alice.resolver.bundle' => 'getHautelookAlice_Resolver_BundleService',
            'hautelook_alice.resolver.file' => 'getHautelookAlice_Resolver_FileService',
            'http_kernel' => 'getHttpKernelService',
            'lexik_jwt_authentication.check_config_command' => 'getLexikJwtAuthentication_CheckConfigCommandService',
            'lexik_jwt_authentication.encoder' => 'getLexikJwtAuthentication_EncoderService',
            'lexik_jwt_authentication.generate_token_command' => 'getLexikJwtAuthentication_GenerateTokenCommandService',
            'lexik_jwt_authentication.jwt_manager' => 'getLexikJwtAuthentication_JwtManagerService',
            'lexik_jwt_authentication.key_loader' => 'getLexikJwtAuthentication_KeyLoaderService',
            'nelmio_alice.data_loader' => 'getNelmioAlice_DataLoaderService',
            'nelmio_alice.file_loader' => 'getNelmioAlice_FileLoaderService',
            'nelmio_alice.files_loader' => 'getNelmioAlice_FilesLoaderService',
            'php_translation.cache_clearer' => 'getPhpTranslation_CacheClearerService',
            'php_translation.catalogue_counter' => 'getPhpTranslation_CatalogueCounterService',
            'php_translation.catalogue_fetcher' => 'getPhpTranslation_CatalogueFetcherService',
            'php_translation.catalogue_manager' => 'getPhpTranslation_CatalogueManagerService',
            'php_translation.catalogue_writer' => 'getPhpTranslation_CatalogueWriterService',
            'php_translation.configuration_manager' => 'getPhpTranslation_ConfigurationManagerService',
            'php_translation.importer' => 'getPhpTranslation_ImporterService',
            'php_translation.storage.app' => 'getPhpTranslation_Storage_AppService',
            'php_translation.storage_manager' => 'getPhpTranslation_StorageManagerService',
            'php_translator.console.delete_obsolete' => 'getPhpTranslator_Console_DeleteObsoleteService',
            'php_translator.console.download' => 'getPhpTranslator_Console_DownloadService',
            'php_translator.console.extract' => 'getPhpTranslator_Console_ExtractService',
            'php_translator.console.status' => 'getPhpTranslator_Console_StatusService',
            'php_translator.console.sync' => 'getPhpTranslator_Console_SyncService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'serializer' => 'getSerializerService',
            'services_resetter' => 'getServicesResetterService',
            'session' => 'getSessionService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'swiftmailer.transport' => 'getSwiftmailer_TransportService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'vich_uploader.download_handler' => 'getVichUploader_DownloadHandlerService',
            'vich_uploader.form.type.file' => 'getVichUploader_Form_Type_FileService',
            'vich_uploader.form.type.image' => 'getVichUploader_Form_Type_ImageService',
            'vich_uploader.upload_handler' => 'getVichUploader_UploadHandlerService',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
        ];
        $this->aliases = [
            'ApiPlatform\\Core\\Action\\NotFoundAction' => 'api_platform.action.not_found',
            'Translation\\Bundle\\Service\\StorageService' => 'php_translation.storage.app',
            'api_platform.action.delete_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_collection' => 'api_platform.action.placeholder',
            'api_platform.action.get_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_subresource' => 'api_platform.action.placeholder',
            'api_platform.action.patch_item' => 'api_platform.action.placeholder',
            'api_platform.action.post_collection' => 'api_platform.action.placeholder',
            'api_platform.action.put_item' => 'api_platform.action.placeholder',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'mailer' => 'swiftmailer.mailer.default',
            'php_translation.storage' => 'php_translation.storage.app',
            'php_translation.storage.default' => 'php_translation.storage.app',
            'vich_uploader.directory_namer_subdir' => 'Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer',
            'vich_uploader.namer_base64' => 'Vich\\UploaderBundle\\Naming\\Base64Namer',
            'vich_uploader.namer_directory_current_date_time' => 'Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer',
            'vich_uploader.namer_directory_property' => 'Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer',
            'vich_uploader.namer_hash' => 'Vich\\UploaderBundle\\Naming\\HashNamer',
            'vich_uploader.namer_origname' => 'Vich\\UploaderBundle\\Naming\\OrignameNamer',
            'vich_uploader.namer_property' => 'Vich\\UploaderBundle\\Naming\\PropertyNamer',
            'vich_uploader.namer_smart_unique' => 'Vich\\UploaderBundle\\Naming\\SmartUniqueNamer',
            'vich_uploader.namer_uniqid' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once \dirname(__DIR__, 4).'/src/DataCollector/ListUserCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
            include_once \dirname(__DIR__, 4).'/src/Repository/CityRepository.php';
            include_once \dirname(__DIR__, 4).'/src/Repository/UserRepository.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/LocaleAwareListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/PruneableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessageLoggerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validation.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/TranslatorBagInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Translation/Translator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/DataCollector/HttpClientDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/DataCollector/MessageDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/DataCollector/MappingCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Inspector/DataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/stopwatch/Stopwatch.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareDenormalizerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/EncoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareEncoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/DecoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/ContextAwareDecoderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Serializer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Swagger/Serializer/ApiGatewayNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterLocatorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Swagger/Serializer/DocumentationNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/OperationPathResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouterOperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/AbstractConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/DocumentationNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/EntrypointNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/ErrorNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ProblemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectToPopulateTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/SerializerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/AbstractObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/ClassInfoTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/ContextTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/InputOutputMetadataTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/AbstractItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/JsonLdContextTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/ItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/ItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Serializer/ItemNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/JsonSerializableNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ConstraintViolationListNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateIntervalNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DataUriNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/CollectionFiltersNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/PartialCollectionViewNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/Serializer/CollectionNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ArrayDenormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Serializer/ObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/ClassDiscriminatorFromClassMetadata.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Serializer/ObjectNormalizer.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/NormalizationAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/XmlEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/JsonEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/YamlEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Encoder/CsvEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/JsonEncoder.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassResolverTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Factory/ClassMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Mapping/Loader/AnnotationLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/NameConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/AdvancedNameConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/NameConverter/MetadataAwareNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-link/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypeGuesserInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypesInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/MimeTypes.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Environment.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/EmptyVersionStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/UrlHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/WebLinkExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/DumpExtension.php';
            include_once \dirname(__DIR__, 4).'/src/Twig/GlobalExtension.php';
            include_once \dirname(__DIR__, 4).'/src/Twig/MyExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Twig/TranslationExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Twig/Extension/UploaderExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Templating/Helper/UploaderHelper.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/AppVariable.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src/MissingExtensionSuggestor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Profiler/Profile.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Security/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/BaseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/CleanListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/ORM/DoctrineORMAdapter.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/RemoveListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/UploadListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/DoctrineProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/Handler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DataCollector/DumpDataCollector.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/ClonerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/AbstractCloner.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Cloner/VarCloner.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Server/Connection.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/EventListener/CorsListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/Resolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/Options/ConfigProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/ResourceClassResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/ResourceClassResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IriConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/ResourceClassInfoTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/OperationDataProviderTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/IriConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Cache/CachedTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/CachedRouteNameResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerFilterContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Serializer/SerializerContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/CustomOperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/PathResolver/OperationPathResolver.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/PathSegmentNameGeneratorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/UnderscorePathSegmentNameGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/AddFormatListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/CloneTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/ToggleableOperationAttributeTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/ReadListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/DeserializeListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IdentifiersExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/CachedIdentifiersExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/IdentifiersExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/IdentifierConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/ContextAwareIdentifierConverterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Identifier/IdentifierConverter.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/CachedSubresourceOperationFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceNameCollectionFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/FormatsResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/OperationResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/AnnotationFilterExtractorTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceFilterMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ShortNameResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/PhpDocResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/InputOutputResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyNameCollectionFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyNameCollectionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/ValidatorPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationSubresourceMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/SerializerPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Metadata/Property/DoctrineOrmPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyMetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/ExtractorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/AbstractExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/XmlExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/Extractor/YamlExtractor.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/TypeFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/EventListener/SwaggerUiListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/ContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/AnonymousContextBuilderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/ContextBuilder.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Util/CorsTrait.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/EventListener/AddLinkHeaderListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/SchemaFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Hydra/JsonSchema/SchemaFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/SchemaFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/HttpCache/EventListener/AddHeadersListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Filter/QueryParameterValidateListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/CollectionDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ContextAwareCollectionDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainCollectionDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainCollectionDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ItemDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainItemDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainItemDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/SubresourceDataProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataProvider/TraceableChainSubresourceDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/ChainSubresourceDataProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/DataPersister/TraceableChainDataPersister.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ChainDataPersister.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/ResourceAccessCheckerInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/ResourceAccessChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/EventListener/DenyAccessListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionFunctionProviderInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Security/Core/Authorization/ExpressionLanguageProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/StorageInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/AbstractStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Storage/FileSystemStorage.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/MetadataReader.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedDriverInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverChain.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AbstractFileDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/XmlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/AdvancedFileLocatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/FileLocator.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/Driver/YamlDriver.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/CacheInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/FileCache.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Mapping/PropertyMappingFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/UploadHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjectorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Injector/FileInjector.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Security/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Provider/AdminContextProvider.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/EventListener/AdminContextListener.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/MenuFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Router/CrudUrlGenerator.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/EntityFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/FieldFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/ActionFactory.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client-contracts/HttpClientInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/TraceableHttpClient.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/HttpClient.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Registry/DashboardControllerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Registry/CrudControllerRegistry.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollectorTranslator.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once \dirname(__DIR__, 4).'/vendor/psr/event-dispatcher/src/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 4).'/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once \dirname(__DIR__, 4).'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    /**
     * Gets the public 'App\Controller\Admin\CityCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CityCrudController
     */
    protected function getCityCrudControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/CityCrudController.php';

        $this->services['App\\Controller\\Admin\\CityCrudController'] = $instance = new \App\Controller\Admin\CityCrudController();

        $instance->setContainer(($this->privates['.service_locator.ua41_HT'] ?? $this->get_ServiceLocator_Ua41HTService())->withContext('App\\Controller\\Admin\\CityCrudController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\Admin\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Admin\DashboardController
     */
    protected function getDashboardControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/DashboardControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractDashboardController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/DashboardController.php';

        $this->services['App\\Controller\\Admin\\DashboardController'] = $instance = new \App\Controller\Admin\DashboardController(($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()), ($this->privates['App\\Repository\\HelpRepository'] ?? $this->getHelpRepositoryService()), ($this->privates['App\\Repository\\CityRepository'] ?? $this->getCityRepositoryService()));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator', 'getCrudUrlGeneratorService', false],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator',
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]))->withContext('App\\Controller\\Admin\\DashboardController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\Admin\HelpCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\HelpCrudController
     */
    protected function getHelpCrudControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/HelpCrudController.php';

        $this->services['App\\Controller\\Admin\\HelpCrudController'] = $instance = new \App\Controller\Admin\HelpCrudController();

        $instance->setContainer(($this->privates['.service_locator.ua41_HT'] ?? $this->get_ServiceLocator_Ua41HTService())->withContext('App\\Controller\\Admin\\HelpCrudController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\Admin\UserCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\UserCrudController
     */
    protected function getUserCrudControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/UserCrudController.php';

        $this->services['App\\Controller\\Admin\\UserCrudController'] = $instance = new \App\Controller\Admin\UserCrudController(($this->privates['App\\Services\\MessageService'] ?? $this->getMessageServiceService()));

        $instance->setContainer(($this->privates['.service_locator.ua41_HT'] ?? $this->get_ServiceLocator_Ua41HTService())->withContext('App\\Controller\\Admin\\UserCrudController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\Api\CheckGmailUser' shared autowired service.
     *
     * @return \App\Controller\Api\CheckGmailUser
     */
    protected function getCheckGmailUserService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/CheckGmailUser.php';

        return $this->services['App\\Controller\\Api\\CheckGmailUser'] = new \App\Controller\Api\CheckGmailUser(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the public 'App\Controller\Api\CreateUser' shared autowired service.
     *
     * @return \App\Controller\Api\CreateUser
     */
    protected function getCreateUserService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/CreateUser.php';

        return $this->services['App\\Controller\\Api\\CreateUser'] = new \App\Controller\Api\CreateUser(($this->privates['App\\Manager\\UserManager'] ?? $this->getUserManagerService()));
    }

    /**
     * Gets the public 'App\Controller\Api\EnabledUser' shared autowired service.
     *
     * @return \App\Controller\Api\EnabledUser
     */
    protected function getEnabledUserService()
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/EnabledUser.php';

        return $this->services['App\\Controller\\Api\\EnabledUser'] = new \App\Controller\Api\EnabledUser(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the public 'App\Controller\DefaultController' shared autowired service.
     *
     * @return \App\Controller\DefaultController
     */
    protected function getDefaultControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/DefaultController.php';

        $this->services['App\\Controller\\DefaultController'] = $instance = new \App\Controller\DefaultController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\DefaultController', $this));

        return $instance;
    }

    /**
     * Gets the public 'App\Controller\Security\SecurityController' shared autowired service.
     *
     * @return \App\Controller\Security\SecurityController
     */
    protected function getSecurityControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Security/SecurityController.php';

        $this->services['App\\Controller\\Security\\SecurityController'] = $instance = new \App\Controller\Security\SecurityController();

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('App\\Controller\\Security\\SecurityController', $this));

        return $instance;
    }

    /**
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand
     */
    protected function getMakeAdminDashboardCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Command/MakeAdminDashboardCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Maker/ClassMaker.php';

        $this->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] = new \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker(($this->services['kernel'] ?? $this->get('kernel', 1)), \dirname(__DIR__, 4)))), \dirname(__DIR__, 4));

        $instance->setName('make:admin:dashboard');

        return $instance;
    }

    /**
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand
     */
    protected function getMakeAdminMigrationCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Command/MakeAdminMigrationCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Maker/Migrator.php';

        $this->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand(new \EasyCorp\Bundle\EasyAdminBundle\Maker\Migrator(), \dirname(__DIR__, 4));

        $instance->setName('make:admin:migration');

        return $instance;
    }

    /**
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand
     */
    protected function getMakeCrudControllerCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Command/MakeCrudControllerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Maker/ClassMaker.php';

        $this->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeCrudControllerCommand(\dirname(__DIR__, 4), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] = new \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker(($this->services['kernel'] ?? $this->get('kernel', 1)), \dirname(__DIR__, 4)))), ($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('make:admin:crud');

        return $instance;
    }

    /**
     * Gets the public 'Faker\Generator' shared service.
     *
     * @return \Faker\Generator
     */
    protected function getGeneratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/fzaninotto/faker/src/Faker/Generator.php';
        include_once \dirname(__DIR__, 4).'/vendor/fzaninotto/faker/src/Faker/Factory.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Faker/Provider/AliceProvider.php';

        $this->services['Faker\\Generator'] = $instance = \Faker\Factory::create('en_US');

        $instance->seed(1);
        $instance->addProvider(new \Nelmio\Alice\Faker\Provider\AliceProvider());

        return $instance;
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\RedirectController
     */
    protected function getRedirectControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/RedirectController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController'] = new \Symfony\Bundle\FrameworkBundle\Controller\RedirectController(($this->services['router'] ?? $this->getRouterService()), 80, 443);
    }

    /**
     * Gets the public 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\TemplateController
     */
    protected function getTemplateControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/TemplateController.php';

        return $this->services['Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController'] = new \Symfony\Bundle\FrameworkBundle\Controller\TemplateController(($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the public 'Translation\Bundle\Catalogue\CatalogueCounter' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueCounter
     */
    protected function getCatalogueCounterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueCounter.php';

        return $this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] = new \Translation\Bundle\Catalogue\CatalogueCounter();
    }

    /**
     * Gets the public 'Translation\Bundle\Catalogue\CatalogueFetcher' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueFetcher
     */
    protected function getCatalogueFetcherService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueFetcher.php';

        return $this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] = new \Translation\Bundle\Catalogue\CatalogueFetcher(($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()));
    }

    /**
     * Gets the public 'Translation\Bundle\Catalogue\CatalogueManager' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueManager
     */
    protected function getCatalogueManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueManager.php';

        return $this->services['Translation\\Bundle\\Catalogue\\CatalogueManager'] = new \Translation\Bundle\Catalogue\CatalogueManager();
    }

    /**
     * Gets the public 'Translation\Bundle\Catalogue\CatalogueWriter' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueWriter
     */
    protected function getCatalogueWriterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueWriter.php';

        return $this->services['Translation\\Bundle\\Catalogue\\CatalogueWriter'] = new \Translation\Bundle\Catalogue\CatalogueWriter(($this->privates['translation.writer'] ?? $this->getTranslation_WriterService()), 'fr');
    }

    /**
     * Gets the public 'Translation\Bundle\Command\CheckMissingCommand' shared service.
     *
     * @return \Translation\Bundle\Command\CheckMissingCommand
     */
    protected function getCheckMissingCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/CheckMissingCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueCounter.php';

        $this->services['Translation\\Bundle\\Command\\CheckMissingCommand'] = $instance = new \Translation\Bundle\Command\CheckMissingCommand(($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()), ($this->services['Translation\\Bundle\\Service\\Importer'] ?? $this->getImporterService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] = new \Translation\Bundle\Catalogue\CatalogueCounter())));

        $instance->setName('translation:check-missing');

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Command\DeleteObsoleteCommand' shared service.
     *
     * @return \Translation\Bundle\Command\DeleteObsoleteCommand
     */
    protected function getDeleteObsoleteCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/BundleTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/StorageTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/DeleteObsoleteCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueManager.php';

        $this->services['Translation\\Bundle\\Command\\DeleteObsoleteCommand'] = $instance = new \Translation\Bundle\Command\DeleteObsoleteCommand(($this->services['Translation\\Bundle\\Service\\StorageManager'] ?? $this->getStorageManagerService()), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueManager'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueManager'] = new \Translation\Bundle\Catalogue\CatalogueManager())), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()));

        $instance->setName('translation:delete-obsolete');

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Command\DownloadCommand' shared service.
     *
     * @return \Translation\Bundle\Command\DownloadCommand
     */
    protected function getDownloadCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/BundleTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/StorageTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/DownloadCommand.php';

        $this->services['Translation\\Bundle\\Command\\DownloadCommand'] = $instance = new \Translation\Bundle\Command\DownloadCommand(($this->services['Translation\\Bundle\\Service\\StorageManager'] ?? $this->getStorageManagerService()), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Service\\CacheClearer'] ?? $this->getCacheClearerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueWriter'] ?? $this->getCatalogueWriterService()));

        $instance->setName('translation:download');

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Command\ExtractCommand' shared service.
     *
     * @return \Translation\Bundle\Command\ExtractCommand
     */
    protected function getExtractCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/BundleTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/ExtractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueCounter.php';

        $this->services['Translation\\Bundle\\Command\\ExtractCommand'] = $instance = new \Translation\Bundle\Command\ExtractCommand(($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueWriter'] ?? $this->getCatalogueWriterService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] = new \Translation\Bundle\Catalogue\CatalogueCounter())), ($this->services['Translation\\Bundle\\Service\\Importer'] ?? $this->getImporterService()), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));

        $instance->setName('translation:extract');

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Command\StatusCommand' shared service.
     *
     * @return \Translation\Bundle\Command\StatusCommand
     */
    protected function getStatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/BundleTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/StatusCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueCounter.php';

        $this->services['Translation\\Bundle\\Command\\StatusCommand'] = $instance = new \Translation\Bundle\Command\StatusCommand(($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] = new \Translation\Bundle\Catalogue\CatalogueCounter())), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()));

        $instance->setName('translation:status');

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Command\SyncCommand' shared service.
     *
     * @return \Translation\Bundle\Command\SyncCommand
     */
    protected function getSyncCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/StorageTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Command/SyncCommand.php';

        $this->services['Translation\\Bundle\\Command\\SyncCommand'] = $instance = new \Translation\Bundle\Command\SyncCommand(($this->services['Translation\\Bundle\\Service\\StorageManager'] ?? $this->getStorageManagerService()));

        $instance->setName('translation:sync');

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Controller\SymfonyProfilerController' shared autowired service.
     *
     * @return \Translation\Bundle\Controller\SymfonyProfilerController
     */
    protected function getSymfonyProfilerControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Controller/SymfonyProfilerController.php';

        $this->services['Translation\\Bundle\\Controller\\SymfonyProfilerController'] = $instance = new \Translation\Bundle\Controller\SymfonyProfilerController(($this->services['php_translation.storage.app'] ?? $this->getPhpTranslation_Storage_AppService()), ($this->services['profiler'] ?? $this->getProfilerService()), true);

        $instance->setContainer(($this->privates['.service_locator.pNNo5z3'] ?? $this->get_ServiceLocator_PNNo5z3Service())->withContext('Translation\\Bundle\\Controller\\SymfonyProfilerController', $this));

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Controller\WebUIController' shared autowired service.
     *
     * @return \Translation\Bundle\Controller\WebUIController
     */
    protected function getWebUIControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Controller/WebUIController.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueManager.php';

        $this->services['Translation\\Bundle\\Controller\\WebUIController'] = $instance = new \Translation\Bundle\Controller\WebUIController(($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueManager'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueManager'] = new \Translation\Bundle\Catalogue\CatalogueManager())), ($this->services['Translation\\Bundle\\Service\\StorageManager'] ?? $this->getStorageManagerService()), ($this->services['validator'] ?? $this->getValidatorService()), $this->parameters['php_translation.locales'], true, true, true, (\dirname(__DIR__, 4).'/'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Service\CacheClearer' shared service.
     *
     * @return \Translation\Bundle\Service\CacheClearer
     */
    protected function getCacheClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Service/CacheClearer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['Translation\\Bundle\\Service\\CacheClearer'] = new \Translation\Bundle\Service\CacheClearer($this->targetDir.'', ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
    }

    /**
     * Gets the public 'Translation\Bundle\Service\ConfigurationManager' shared service.
     *
     * @return \Translation\Bundle\Service\ConfigurationManager
     */
    protected function getConfigurationManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Service/ConfigurationManager.php';

        $this->services['Translation\\Bundle\\Service\\ConfigurationManager'] = $instance = new \Translation\Bundle\Service\ConfigurationManager();

        $instance->addConfiguration('app', ($this->privates['php_translation.configuration.app'] ?? $this->getPhpTranslation_Configuration_AppService()));

        return $instance;
    }

    /**
     * Gets the public 'Translation\Bundle\Service\Importer' shared service.
     *
     * @return \Translation\Bundle\Service\Importer
     */
    protected function getImporterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Service/Importer.php';

        return $this->services['Translation\\Bundle\\Service\\Importer'] = new \Translation\Bundle\Service\Importer(($this->privates['Translation\\Extractor\\Extractor'] ?? $this->getExtractorService()), ($this->services['twig'] ?? $this->getTwigService()), 'fr');
    }

    /**
     * Gets the public 'Translation\Bundle\Service\StorageManager' shared service.
     *
     * @return \Translation\Bundle\Service\StorageManager
     */
    protected function getStorageManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Service/StorageManager.php';

        $this->services['Translation\\Bundle\\Service\\StorageManager'] = $instance = new \Translation\Bundle\Service\StorageManager();

        $instance->addStorage('app', ($this->services['php_translation.storage.app'] ?? $this->getPhpTranslation_Storage_AppService()));

        return $instance;
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\Base64Namer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\Base64Namer
     */
    protected function getBase64NamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Base64Namer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\Base64Namer'] = new \Vich\UploaderBundle\Naming\Base64Namer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer
     */
    protected function getCurrentDateTimeDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/CurrentDateTimeDirectoryNamer.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DateTimeHelper.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/CurrentDateTimeHelper.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\CurrentDateTimeDirectoryNamer'] = new \Vich\UploaderBundle\Naming\CurrentDateTimeDirectoryNamer(new \Vich\UploaderBundle\Naming\CurrentDateTimeHelper(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\HashNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\HashNamer
     */
    protected function getHashNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/HashNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\HashNamer'] = new \Vich\UploaderBundle\Naming\HashNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\OrignameNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\OrignameNamer
     */
    protected function getOrignameNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/OrignameNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\OrignameNamer'] = new \Vich\UploaderBundle\Naming\OrignameNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\PropertyDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyDirectoryNamer
     */
    protected function getPropertyDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/PropertyDirectoryNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\PropertyDirectoryNamer'] = new \Vich\UploaderBundle\Naming\PropertyDirectoryNamer(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\PropertyNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\PropertyNamer
     */
    protected function getPropertyNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/PropertyNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\PropertyNamer'] = new \Vich\UploaderBundle\Naming\PropertyNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\SmartUniqueNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SmartUniqueNamer
     */
    protected function getSmartUniqueNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/SmartUniqueNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\SmartUniqueNamer'] = new \Vich\UploaderBundle\Naming\SmartUniqueNamer(($this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] ?? $this->getTransliteratorService()));
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\SubdirDirectoryNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\SubdirDirectoryNamer
     */
    protected function getSubdirDirectoryNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/DirectoryNamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/ConfigurableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/SubdirDirectoryNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\SubdirDirectoryNamer'] = new \Vich\UploaderBundle\Naming\SubdirDirectoryNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getUniqidNamerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/UniqidNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer.city_images' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    protected function getUniqidNamer_CityImagesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/UniqidNamer.php';

        return $this->services['Vich\\UploaderBundle\\Naming\\UniqidNamer.city_images'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'api_platform.action.documentation' shared service.
     *
     * @return \ApiPlatform\Core\Documentation\Action\DocumentationAction
     */
    protected function getApiPlatform_Action_DocumentationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Documentation/Action/DocumentationAction.php';

        return $this->services['api_platform.action.documentation'] = new \ApiPlatform\Core\Documentation\Action\DocumentationAction(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), 'Sentraider API', '', '1.0.0', NULL, $this->parameters['api_platform.swagger.versions']);
    }

    /**
     * Gets the public 'api_platform.action.entrypoint' shared service.
     *
     * @return \ApiPlatform\Core\Action\EntrypointAction
     */
    protected function getApiPlatform_Action_EntrypointService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/EntrypointAction.php';

        return $this->services['api_platform.action.entrypoint'] = new \ApiPlatform\Core\Action\EntrypointAction(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /**
     * Gets the public 'api_platform.action.exception' shared service.
     *
     * @return \ApiPlatform\Core\Action\ExceptionAction
     */
    protected function getApiPlatform_Action_ExceptionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/ExceptionAction.php';

        return $this->services['api_platform.action.exception'] = new \ApiPlatform\Core\Action\ExceptionAction(($this->services['serializer'] ?? $this->getSerializerService()), $this->parameters['api_platform.error_formats'], $this->parameters['api_platform.exception_to_status']);
    }

    /**
     * Gets the public 'api_platform.action.not_found' shared service.
     *
     * @return \ApiPlatform\Core\Action\NotFoundAction
     */
    protected function getApiPlatform_Action_NotFoundService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/NotFoundAction.php';

        return $this->services['api_platform.action.not_found'] = new \ApiPlatform\Core\Action\NotFoundAction();
    }

    /**
     * Gets the public 'api_platform.action.placeholder' shared service.
     *
     * @return \ApiPlatform\Core\Action\PlaceholderAction
     */
    protected function getApiPlatform_Action_PlaceholderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Action/PlaceholderAction.php';

        return $this->services['api_platform.action.placeholder'] = new \ApiPlatform\Core\Action\PlaceholderAction();
    }

    /**
     * Gets the public 'api_platform.graphql.action.entrypoint' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Action\EntrypointAction
     */
    protected function getApiPlatform_Graphql_Action_EntrypointService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Action/EntrypointAction.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/ExecutorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Executor.php';

        return $this->services['api_platform.graphql.action.entrypoint'] = new \ApiPlatform\Core\GraphQl\Action\EntrypointAction(($this->privates['api_platform.graphql.schema_builder'] ?? $this->getApiPlatform_Graphql_SchemaBuilderService()), new \ApiPlatform\Core\GraphQl\Executor(), ($this->services['api_platform.graphql.action.graphiql'] ?? $this->getApiPlatform_Graphql_Action_GraphiqlService()), ($this->services['api_platform.graphql.action.graphql_playground'] ?? $this->getApiPlatform_Graphql_Action_GraphqlPlaygroundService()), true, true, false, 'graphiql');
    }

    /**
     * Gets the public 'api_platform.graphql.action.graphiql' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Action\GraphiQlAction
     */
    protected function getApiPlatform_Graphql_Action_GraphiqlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Action/GraphiQlAction.php';

        return $this->services['api_platform.graphql.action.graphiql'] = new \ApiPlatform\Core\GraphQl\Action\GraphiQlAction(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()), true, 'Sentraider API');
    }

    /**
     * Gets the public 'api_platform.graphql.action.graphql_playground' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Action\GraphQlPlaygroundAction
     */
    protected function getApiPlatform_Graphql_Action_GraphqlPlaygroundService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Action/GraphQlPlaygroundAction.php';

        return $this->services['api_platform.graphql.action.graphql_playground'] = new \ApiPlatform\Core\GraphQl\Action\GraphQlPlaygroundAction(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()), false, 'Sentraider API');
    }

    /**
     * Gets the public 'api_platform.jsonld.action.context' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\Action\ContextAction
     */
    protected function getApiPlatform_Jsonld_Action_ContextService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonLd/Action/ContextAction.php';

        return $this->services['api_platform.jsonld.action.context'] = new \ApiPlatform\Core\JsonLd\Action\ContextAction(($this->privates['api_platform.jsonld.context_builder'] ?? $this->getApiPlatform_Jsonld_ContextBuilderService()), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the public 'api_platform.swagger.action.ui' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction
     */
    protected function getApiPlatform_Swagger_Action_UiService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Action/SwaggerUiAction.php';

        return $this->services['api_platform.swagger.action.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Action\SwaggerUiAction(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->services['serializer'] ?? $this->getSerializerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()), 'Sentraider API', '', '1.0.0', $this->parameters['api_platform.formats'], false, '', '', 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', [], true, true, true, true, true, false, $this->parameters['api_platform.swagger.versions']);
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('0mvI3PUC8F', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.app_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_AppClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.app_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService())]);
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService()), 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()), 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()), 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService())]);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('bkYgp9n28V', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'cache.system_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_SystemClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService()), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()), 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()), 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()), 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()), 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService())]);
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearer2Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/ChainCacheClearer.php';

        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(new RewindableGenerator(function () {
            yield 0 => ($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService());
        }, 1));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.cache_warmer.cache_pool_clearer'] ?? $this->getApiPlatform_CacheWarmer_CachePoolClearerService());
            yield 1 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->getValidator_Mapping_CacheWarmerService());
            yield 2 => ($this->privates['translation.warmer'] ?? $this->getTranslation_WarmerService());
            yield 3 => ($this->privates['router.cache_warmer'] ?? $this->getRouter_CacheWarmerService());
            yield 4 => ($this->privates['annotations.cache_warmer'] ?? $this->getAnnotations_CacheWarmerService());
            yield 5 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->getSerializer_Mapping_CacheWarmerService());
            yield 6 => ($this->privates['twig.template_cache_warmer'] ?? $this->getTwig_TemplateCacheWarmerService());
            yield 7 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->getDoctrine_Orm_ProxyCacheWarmerService());
            yield 8 => ($this->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] ?? $this->getCacheWarmer3Service());
            yield 9 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer'] ?? $this->getCacheWarmer2Service());
        }, 10), true, ($this->targetDir.''.'/App_KernelDevDebugContainerDeprecations.log'));
    }

    /**
     * Gets the public 'console.command.public_alias.api_platform.json_schema.json_schema_generate_command' shared service.
     *
     * @return \ApiPlatform\Core\JsonSchema\Command\JsonSchemaGenerateCommand
     */
    protected function getConsole_Command_PublicAlias_ApiPlatform_JsonSchema_JsonSchemaGenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/JsonSchema/Command/JsonSchemaGenerateCommand.php';

        return $this->services['console.command.public_alias.api_platform.json_schema.json_schema_generate_command'] = new \ApiPlatform\Core\JsonSchema\Command\JsonSchemaGenerateCommand(($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()), $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the public 'console.command.public_alias.api_platform.swagger.command.swagger_command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand
     */
    protected function getConsole_Command_PublicAlias_ApiPlatform_Swagger_Command_SwaggerCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/SwaggerCommand.php';

        return $this->services['console.command.public_alias.api_platform.swagger.command.swagger_command'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\SwaggerCommand(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), 'Sentraider API', '', '1.0.0', NULL, $this->parameters['api_platform.swagger.versions']);
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand' => ['services', 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand', 'getMakeAdminDashboardCommandService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand' => ['services', 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand', 'getMakeAdminMigrationCommandService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand' => ['services', 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand', 'getMakeCrudControllerCommandService', false],
            'Translation\\Bundle\\Command\\CheckMissingCommand' => ['services', 'Translation\\Bundle\\Command\\CheckMissingCommand', 'getCheckMissingCommandService', false],
            'Translation\\Bundle\\Command\\DeleteObsoleteCommand' => ['services', 'Translation\\Bundle\\Command\\DeleteObsoleteCommand', 'getDeleteObsoleteCommandService', false],
            'Translation\\Bundle\\Command\\DownloadCommand' => ['services', 'Translation\\Bundle\\Command\\DownloadCommand', 'getDownloadCommandService', false],
            'Translation\\Bundle\\Command\\ExtractCommand' => ['services', 'Translation\\Bundle\\Command\\ExtractCommand', 'getExtractCommandService', false],
            'Translation\\Bundle\\Command\\StatusCommand' => ['services', 'Translation\\Bundle\\Command\\StatusCommand', 'getStatusCommandService', false],
            'Translation\\Bundle\\Command\\SyncCommand' => ['services', 'Translation\\Bundle\\Command\\SyncCommand', 'getSyncCommandService', false],
            'api_platform.graphql.command.export_command' => ['privates', 'api_platform.graphql.command.export_command', 'getApiPlatform_Graphql_Command_ExportCommandService', false],
            'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService', false],
            'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService', false],
            'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService', false],
            'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService', false],
            'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService', false],
            'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService', false],
            'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService', false],
            'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService', false],
            'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService', false],
            'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService', false],
            'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService', false],
            'console.command.container_lint' => ['privates', 'console.command.container_lint', 'getConsole_Command_ContainerLintService', false],
            'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService', false],
            'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService', false],
            'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService', false],
            'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService', false],
            'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService', false],
            'console.command.secrets_decrypt_to_local' => ['privates', 'console.command.secrets_decrypt_to_local', 'getConsole_Command_SecretsDecryptToLocalService', false],
            'console.command.secrets_encrypt_from_local' => ['privates', 'console.command.secrets_encrypt_from_local', 'getConsole_Command_SecretsEncryptFromLocalService', false],
            'console.command.secrets_generate_key' => ['privates', 'console.command.secrets_generate_key', 'getConsole_Command_SecretsGenerateKeyService', false],
            'console.command.secrets_list' => ['privates', 'console.command.secrets_list', 'getConsole_Command_SecretsListService', false],
            'console.command.secrets_remove' => ['privates', 'console.command.secrets_remove', 'getConsole_Command_SecretsRemoveService', false],
            'console.command.secrets_set' => ['privates', 'console.command.secrets_set', 'getConsole_Command_SecretsSetService', false],
            'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService', false],
            'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService', false],
            'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService', false],
            'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService', false],
            'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService', false],
            'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService', false],
            'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService', false],
            'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService', false],
            'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService', false],
            'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService', false],
            'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService', false],
            'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService', false],
            'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService', false],
            'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService', false],
            'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService', false],
            'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService', false],
            'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService', false],
            'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService', false],
            'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService', false],
            'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService', false],
            'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService', false],
            'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService', false],
            'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService', false],
            'doctrine_migrations.diff_command' => ['privates', 'doctrine_migrations.diff_command', 'getDoctrineMigrations_DiffCommandService', false],
            'doctrine_migrations.dump_schema_command' => ['privates', 'doctrine_migrations.dump_schema_command', 'getDoctrineMigrations_DumpSchemaCommandService', false],
            'doctrine_migrations.execute_command' => ['privates', 'doctrine_migrations.execute_command', 'getDoctrineMigrations_ExecuteCommandService', false],
            'doctrine_migrations.generate_command' => ['privates', 'doctrine_migrations.generate_command', 'getDoctrineMigrations_GenerateCommandService', false],
            'doctrine_migrations.latest_command' => ['privates', 'doctrine_migrations.latest_command', 'getDoctrineMigrations_LatestCommandService', false],
            'doctrine_migrations.migrate_command' => ['privates', 'doctrine_migrations.migrate_command', 'getDoctrineMigrations_MigrateCommandService', false],
            'doctrine_migrations.rollup_command' => ['privates', 'doctrine_migrations.rollup_command', 'getDoctrineMigrations_RollupCommandService', false],
            'doctrine_migrations.status_command' => ['privates', 'doctrine_migrations.status_command', 'getDoctrineMigrations_StatusCommandService', false],
            'doctrine_migrations.up_to_date_command' => ['privates', 'doctrine_migrations.up_to_date_command', 'getDoctrineMigrations_UpToDateCommandService', false],
            'doctrine_migrations.version_command' => ['privates', 'doctrine_migrations.version_command', 'getDoctrineMigrations_VersionCommandService', false],
            'lexik_jwt_authentication.check_config_command' => ['services', 'lexik_jwt_authentication.check_config_command', 'getLexikJwtAuthentication_CheckConfigCommandService', false],
            'lexik_jwt_authentication.generate_token_command' => ['services', 'lexik_jwt_authentication.generate_token_command', 'getLexikJwtAuthentication_GenerateTokenCommandService', false],
            'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService', false],
            'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService', false],
            'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService', false],
            'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService', false],
            'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService', false],
            'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService', false],
            'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService', false],
            'maker.auto_command.make_functional_test' => ['privates', 'maker.auto_command.make_functional_test', 'getMaker_AutoCommand_MakeFunctionalTestService', false],
            'maker.auto_command.make_message' => ['privates', 'maker.auto_command.make_message', 'getMaker_AutoCommand_MakeMessageService', false],
            'maker.auto_command.make_messenger_middleware' => ['privates', 'maker.auto_command.make_messenger_middleware', 'getMaker_AutoCommand_MakeMessengerMiddlewareService', false],
            'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService', false],
            'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService', false],
            'maker.auto_command.make_reset_password' => ['privates', 'maker.auto_command.make_reset_password', 'getMaker_AutoCommand_MakeResetPasswordService', false],
            'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService', false],
            'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService', false],
            'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService', false],
            'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService', false],
            'maker.auto_command.make_unit_test' => ['privates', 'maker.auto_command.make_unit_test', 'getMaker_AutoCommand_MakeUnitTestService', false],
            'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService', false],
            'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService', false],
            'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService', false],
            'monolog.command.server_log' => ['privates', 'monolog.command.server_log', 'getMonolog_Command_ServerLogService', false],
            'security.command.user_password_encoder' => ['privates', 'security.command.user_password_encoder', 'getSecurity_Command_UserPasswordEncoderService', false],
            'swiftmailer.command.debug' => ['privates', 'swiftmailer.command.debug', 'getSwiftmailer_Command_DebugService', false],
            'swiftmailer.command.new_email' => ['privates', 'swiftmailer.command.new_email', 'getSwiftmailer_Command_NewEmailService', false],
            'swiftmailer.command.send_email' => ['privates', 'swiftmailer.command.send_email', 'getSwiftmailer_Command_SendEmailService', false],
            'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService', false],
            'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService', false],
            'var_dumper.command.server_dump' => ['privates', 'var_dumper.command.server_dump', 'getVarDumper_Command_ServerDumpService', false],
            'vich_uploader.command.mapping_debug' => ['privates', 'vich_uploader.command.mapping_debug', 'getVichUploader_Command_MappingDebugService', false],
            'vich_uploader.command.mapping_debug_class' => ['privates', 'vich_uploader.command.mapping_debug_class', 'getVichUploader_Command_MappingDebugClassService', false],
            'vich_uploader.command.mapping_list_classes' => ['privates', 'vich_uploader.command.mapping_list_classes', 'getVichUploader_Command_MappingListClassesService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand',
            'Translation\\Bundle\\Command\\CheckMissingCommand' => 'Translation\\Bundle\\Command\\CheckMissingCommand',
            'Translation\\Bundle\\Command\\DeleteObsoleteCommand' => 'Translation\\Bundle\\Command\\DeleteObsoleteCommand',
            'Translation\\Bundle\\Command\\DownloadCommand' => 'Translation\\Bundle\\Command\\DownloadCommand',
            'Translation\\Bundle\\Command\\ExtractCommand' => 'Translation\\Bundle\\Command\\ExtractCommand',
            'Translation\\Bundle\\Command\\StatusCommand' => 'Translation\\Bundle\\Command\\StatusCommand',
            'Translation\\Bundle\\Command\\SyncCommand' => 'Translation\\Bundle\\Command\\SyncCommand',
            'api_platform.graphql.command.export_command' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\Command\\GraphQlExportCommand',
            'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
            'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
            'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
            'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
            'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
            'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
            'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
            'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
            'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
            'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
            'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
            'console.command.container_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerLintCommand',
            'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
            'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
            'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
            'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
            'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
            'console.command.secrets_decrypt_to_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsDecryptToLocalCommand',
            'console.command.secrets_encrypt_from_local' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsEncryptFromLocalCommand',
            'console.command.secrets_generate_key' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsGenerateKeysCommand',
            'console.command.secrets_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsListCommand',
            'console.command.secrets_remove' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsRemoveCommand',
            'console.command.secrets_set' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\SecretsSetCommand',
            'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
            'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
            'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
            'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
            'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
            'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
            'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
            'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
            'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
            'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
            'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
            'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
            'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
            'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
            'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
            'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
            'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
            'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
            'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
            'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
            'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
            'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
            'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
            'doctrine_migrations.diff_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDiffDoctrineCommand',
            'doctrine_migrations.dump_schema_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsDumpSchemaDoctrineCommand',
            'doctrine_migrations.execute_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsExecuteDoctrineCommand',
            'doctrine_migrations.generate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsGenerateDoctrineCommand',
            'doctrine_migrations.latest_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsLatestDoctrineCommand',
            'doctrine_migrations.migrate_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsMigrateDoctrineCommand',
            'doctrine_migrations.rollup_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsRollupDoctrineCommand',
            'doctrine_migrations.status_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsStatusDoctrineCommand',
            'doctrine_migrations.up_to_date_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsUpToDateDoctrineCommand',
            'doctrine_migrations.version_command' => 'Doctrine\\Bundle\\MigrationsBundle\\Command\\MigrationsVersionDoctrineCommand',
            'lexik_jwt_authentication.check_config_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\CheckConfigCommand',
            'lexik_jwt_authentication.generate_token_command' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\GenerateTokenCommand',
            'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_functional_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_message' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_messenger_middleware' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_reset_password' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_unit_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
            'monolog.command.server_log' => 'Symfony\\Bridge\\Monolog\\Command\\ServerLogCommand',
            'security.command.user_password_encoder' => 'Symfony\\Bundle\\SecurityBundle\\Command\\UserPasswordEncoderCommand',
            'swiftmailer.command.debug' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\DebugCommand',
            'swiftmailer.command.new_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\NewEmailCommand',
            'swiftmailer.command.send_email' => 'Symfony\\Bundle\\SwiftmailerBundle\\Command\\SendEmailCommand',
            'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
            'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
            'var_dumper.command.server_dump' => 'Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand',
            'vich_uploader.command.mapping_debug' => 'Vich\\UploaderBundle\\Command\\MappingDebugCommand',
            'vich_uploader.command.mapping_debug_class' => 'Vich\\UploaderBundle\\Command\\MappingDebugClassCommand',
            'vich_uploader.command.mapping_list_classes' => 'Vich\\UploaderBundle\\Command\\MappingListClassesCommand',
        ]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'lint:container' => 'console.command.container_lint', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'secrets:set' => 'console.command.secrets_set', 'secrets:remove' => 'console.command.secrets_remove', 'secrets:generate-keys' => 'console.command.secrets_generate_key', 'secrets:list' => 'console.command.secrets_list', 'secrets:decrypt-to-local' => 'console.command.secrets_decrypt_to_local', 'secrets:encrypt-from-local' => 'console.command.secrets_encrypt_from_local', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:migrations:diff' => 'doctrine_migrations.diff_command', 'doctrine:migrations:dump-schema' => 'doctrine_migrations.dump_schema_command', 'doctrine:migrations:execute' => 'doctrine_migrations.execute_command', 'doctrine:migrations:generate' => 'doctrine_migrations.generate_command', 'doctrine:migrations:latest' => 'doctrine_migrations.latest_command', 'doctrine:migrations:migrate' => 'doctrine_migrations.migrate_command', 'doctrine:migrations:rollup' => 'doctrine_migrations.rollup_command', 'doctrine:migrations:status' => 'doctrine_migrations.status_command', 'doctrine:migrations:up-to-date' => 'doctrine_migrations.up_to_date_command', 'doctrine:migrations:version' => 'doctrine_migrations.version_command', 'security:encode-password' => 'security.command.user_password_encoder', 'server:dump' => 'var_dumper.command.server_dump', 'server:log' => 'monolog.command.server_log', 'api:graphql:export' => 'api_platform.graphql.command.export_command', 'lexik:jwt:check-config' => 'lexik_jwt_authentication.check_config_command', 'lexik:jwt:generate-token' => 'lexik_jwt_authentication.generate_token_command', 'translation:check-missing' => 'Translation\\Bundle\\Command\\CheckMissingCommand', 'translation:delete-obsolete' => 'Translation\\Bundle\\Command\\DeleteObsoleteCommand', 'translation:download' => 'Translation\\Bundle\\Command\\DownloadCommand', 'translation:extract' => 'Translation\\Bundle\\Command\\ExtractCommand', 'translation:status' => 'Translation\\Bundle\\Command\\StatusCommand', 'translation:sync' => 'Translation\\Bundle\\Command\\SyncCommand', 'vich:mapping:debug-class' => 'vich_uploader.command.mapping_debug_class', 'vich:mapping:debug' => 'vich_uploader.command.mapping_debug', 'vich:mapping:list-classes' => 'vich_uploader.command.mapping_list_classes', 'make:admin:migration' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminMigrationCommand', 'make:admin:dashboard' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand', 'make:admin:crud' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeCrudControllerCommand', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:message' => 'maker.auto_command.make_message', 'make:messenger-middleware' => 'maker.auto_command.make_messenger_middleware', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:reset-password' => 'maker.auto_command.make_reset_password', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'base64' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'bool' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'const' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'csv' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'default' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'file' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'float' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'int' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'json' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'key' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'query_string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'require' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'resolve' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'string' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'trim' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
            'url' => ['privates', 'container.env_var_processor', 'getContainer_EnvVarProcessorService', false],
        ], [
            'base64' => '?',
            'bool' => '?',
            'const' => '?',
            'csv' => '?',
            'default' => '?',
            'file' => '?',
            'float' => '?',
            'int' => '?',
            'json' => '?',
            'key' => '?',
            'query_string' => '?',
            'require' => '?',
            'resolve' => '?',
            'string' => '?',
            'trim' => '?',
            'url' => '?',
        ]);
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();

        $c = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $c->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($c);

        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        $a->setSQLLogger($b);
        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\EventListener\\ContactListener' => ['privates', 'App\\EventListener\\ContactListener', 'getContactListenerService', false],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', false],
        ], [
            'App\\EventListener\\ContactListener' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));

        $e = new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter();
        $f = ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService());
        $g = ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService());

        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\CleanListener('city_images', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\RemoveListener('city_images', $e, $f, $g));
        $d->addEventSubscriber(new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('city_images', $e, $f, $g));
        $d->addEventListener([0 => 'prePersist'], 'App\\EventListener\\ContactListener');
        $d->addEventListener([0 => 'preUpdate'], 'App\\EventListener\\ContactListener');
        $d->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['url' => $this->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], $a, $d, []);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity'), 1 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Entity')]);

        $b->addDriver($c, 'App\\Entity');
        $b->addDriver($c, 'Vich\\UploaderBundle\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity', 'VichUploaderBundle' => 'Vich\\UploaderBundle\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService())));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService())));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService())));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Repository\\AdminRepository' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', false],
            'App\\Repository\\CityRepository' => ['privates', 'App\\Repository\\CityRepository', 'getCityRepositoryService', false],
            'App\\Repository\\ContactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', false],
            'App\\Repository\\HelpRepository' => ['privates', 'App\\Repository\\HelpRepository', 'getHelpRepositoryService', false],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'App\\Repository\\AdminRepository' => '?',
            'App\\Repository\\CityRepository' => '?',
            'App\\Repository\\ContactRepository' => '?',
            'App\\Repository\\HelpRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'error_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ErrorController
     */
    protected function getErrorControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ErrorController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/SerializerErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/ErrorRenderer/TwigErrorRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->services['error_controller'] = new \Symfony\Component\HttpKernel\Controller\ErrorController(($this->services['http_kernel'] ?? $this->getHttpKernelService()), 'error_controller', new \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer(($this->services['serializer'] ?? $this->getSerializerService()), \Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer::getPreferredFormat($a), new \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), \Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer::isDebug($a, true)), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true)));
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(new \Monolog\Handler\NullHandler());
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('lexik_jwt_authentication.on_authentication_success', [0 => function () {
            return ($this->privates['acme_api.event.authentication_success_listener'] ?? $this->getAcmeApi_Event_AuthenticationSuccessListenerService());
        }, 1 => 'onAuthenticationSuccessResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelRequest'], 250);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['nelmio_cors.cors_listener'] ?? $this->getNelmioCors_CorsListenerService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.add_format'] ?? $this->getApiPlatform_Listener_Request_AddFormatService());
        }, 1 => 'onKernelRequest'], 7);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.read'] ?? $this->getApiPlatform_Listener_Request_ReadService());
        }, 1 => 'onKernelRequest'], 4);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.write'] ?? $this->getApiPlatform_Listener_View_WriteService());
        }, 1 => 'onKernelView'], 32);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.request.deserialize'] ?? $this->getApiPlatform_Listener_Request_DeserializeService());
        }, 1 => 'onKernelRequest'], 2);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.serialize'] ?? $this->getApiPlatform_Listener_View_SerializeService());
        }, 1 => 'onKernelView'], 16);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.respond'] ?? $this->getApiPlatform_Listener_View_RespondService());
        }, 1 => 'onKernelView'], 8);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['api_platform.listener.exception.validation'] ?? $this->getApiPlatform_Listener_Exception_ValidationService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['api_platform.listener.exception'] ?? $this->getApiPlatform_Listener_ExceptionService());
        }, 1 => 'onKernelException'], -96);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.swagger.listener.ui'] ?? ($this->privates['api_platform.swagger.listener.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener()));
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['api_platform.hydra.listener.response.add_link_header'] ?? $this->getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService());
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['api_platform.http_cache.listener.response.configure'] ?? $this->getApiPlatform_HttpCache_Listener_Response_ConfigureService());
        }, 1 => 'onKernelResponse'], -1);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['api_platform.listener.view.validate'] ?? $this->getApiPlatform_Listener_View_ValidateService());
        }, 1 => 'onKernelView'], 64);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.listener.view.validate_query_parameters'] ?? $this->getApiPlatform_Listener_View_ValidateQueryParametersService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onSecurity'], 3);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['api_platform.security.listener.request.deny_access'] ?? $this->getApiPlatform_Security_Listener_Request_DenyAccessService());
        }, 1 => 'onSecurityPostDenormalize'], 1);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\AdminContextListener'] ?? $this->getAdminContextListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'] ?? $this->getCrudResponseListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('App\\Event\\ContactEvent', [0 => function () {
            return ($this->privates['App\\EventSubscriber\\ContactSubscriber'] ?? $this->getContactSubscriberService());
        }, 1 => 'onSendContact'], 1);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_aware_listener'] ?? $this->getLocaleAwareListenerService());
        }, 1 => 'onKernelFinishRequest'], -15);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->getConsole_ErrorListenerService());
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.envelope_listener'] ?? ($this->privates['mailer.envelope_listener'] = new \Symfony\Component\Mailer\EventListener\EnvelopeListener(NULL, NULL)));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()));
        }, 1 => 'onMessage'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_link.add_link_header_listener'] ?? ($this->privates['web_link.add_link_header_listener'] = new \Symfony\Component\WebLink\EventListener\AddLinkHeaderListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('Symfony\\Component\\Mailer\\Event\\MessageEvent', [0 => function () {
            return ($this->privates['twig.mailer.message_listener'] ?? $this->getTwig_Mailer_MessageListenerService());
        }, 1 => 'onMessage'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->getDebug_Security_Voter_VoteListenerService());
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->getDebug_DumpListenerService());
        }, 1 => 'configure'], 1024);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['swiftmailer.email_sender.listener'] ?? $this->getSwiftmailer_EmailSender_ListenerService());
        }, 1 => 'onTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.loader.doctrine' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\PurgerLoader
     */
    protected function getFidryAliceDataFixtures_Loader_DoctrineService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PurgerLoader.php';

        return $this->services['fidry_alice_data_fixtures.loader.doctrine'] = new \Fidry\AliceDataFixtures\Loader\PurgerLoader(($this->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] ?? $this->getFidryAliceDataFixtures_Doctrine_PersisterLoaderService()), ($this->services['fidry_alice_data_fixtures.persistence.purger_factory.doctrine'] ?? $this->getFidryAliceDataFixtures_Persistence_PurgerFactory_DoctrineService()), 'delete', ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.persistence.persister.doctrine' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister
     */
    protected function getFidryAliceDataFixtures_Persistence_Persister_DoctrineService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Persister/ObjectManagerPersister.php';

        return $this->services['fidry_alice_data_fixtures.persistence.persister.doctrine'] = new \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the public 'fidry_alice_data_fixtures.persistence.purger_factory.doctrine' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger
     */
    protected function getFidryAliceDataFixtures_Persistence_PurgerFactory_DoctrineService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PurgerFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Doctrine/Purger/Purger.php';

        return $this->services['fidry_alice_data_fixtures.persistence.purger_factory.doctrine'] = new \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormFactory.php';

        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(($this->privates['form.registry'] ?? $this->getForm_RegistryService()));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php';

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the public 'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command' shared service.
     *
     * @return \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand
     */
    protected function getHautelookAlice_Console_Command_Doctrine_DoctrineOrmLoadDataFixturesCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Console/Command/Doctrine/DoctrineOrmLoadDataFixturesCommand.php';

        return $this->services['hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command'] = new \Hautelook\AliceBundle\Console\Command\Doctrine\DoctrineOrmLoadDataFixturesCommand('hautelook:fixtures:load', ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['hautelook_alice.loader'] ?? $this->getHautelookAlice_LoaderService()));
    }

    /**
     * Gets the public 'hautelook_alice.data_fixtures.append_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\FileResolverLoader
     */
    protected function getHautelookAlice_DataFixtures_AppendLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/FileResolverLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/FileResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Resolver/File/KernelFileResolver.php';

        return $this->services['hautelook_alice.data_fixtures.append_loader'] = new \Fidry\AliceDataFixtures\Loader\FileResolverLoader(($this->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] ?? $this->getFidryAliceDataFixtures_Doctrine_PersisterLoaderService()), ($this->services['hautelook_alice.resolver.file'] ?? ($this->services['hautelook_alice.resolver.file'] = new \Hautelook\AliceBundle\Resolver\File\KernelFileResolver(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the public 'hautelook_alice.data_fixtures.purge_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\FileResolverLoader
     */
    protected function getHautelookAlice_DataFixtures_PurgeLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/FileResolverLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/FileResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Resolver/File/KernelFileResolver.php';

        return $this->services['hautelook_alice.data_fixtures.purge_loader'] = new \Fidry\AliceDataFixtures\Loader\FileResolverLoader(($this->services['fidry_alice_data_fixtures.loader.doctrine'] ?? $this->getFidryAliceDataFixtures_Loader_DoctrineService()), ($this->services['hautelook_alice.resolver.file'] ?? ($this->services['hautelook_alice.resolver.file'] = new \Hautelook\AliceBundle\Resolver\File\KernelFileResolver(($this->services['kernel'] ?? $this->get('kernel', 1))))));
    }

    /**
     * Gets the public 'hautelook_alice.loader' shared service.
     *
     * @return \Hautelook\AliceBundle\Loader\DoctrineOrmLoader
     */
    protected function getHautelookAlice_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Loader/DoctrineOrmLoader.php';

        return $this->services['hautelook_alice.loader'] = new \Hautelook\AliceBundle\Loader\DoctrineOrmLoader(($this->services['hautelook_alice.resolver.bundle'] ?? $this->getHautelookAlice_Resolver_BundleService()), ($this->services['hautelook_alice.locator'] ?? $this->getHautelookAlice_LocatorService()), ($this->services['hautelook_alice.data_fixtures.purge_loader'] ?? $this->getHautelookAlice_DataFixtures_PurgeLoaderService()), ($this->services['hautelook_alice.data_fixtures.append_loader'] ?? $this->getHautelookAlice_DataFixtures_AppendLoaderService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the public 'hautelook_alice.locator' shared service.
     *
     * @return \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator
     */
    protected function getHautelookAlice_LocatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/FixtureLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Locator/EnvironmentlessFilesLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Locator/EnvDirectoryLocator.php';

        return $this->services['hautelook_alice.locator'] = new \Hautelook\AliceBundle\Locator\EnvironmentlessFilesLocator(new \Hautelook\AliceBundle\Locator\EnvDirectoryLocator($this->parameters['hautelook_alice.fixtures_path'], $this->parameters['hautelook_alice.root_dirs']));
    }

    /**
     * Gets the public 'hautelook_alice.resolver.bundle' shared service.
     *
     * @return \Hautelook\AliceBundle\Resolver\Bundle\NoBundleResolver
     */
    protected function getHautelookAlice_Resolver_BundleService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/BundleResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Resolver/Bundle/NoBundleResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Resolver/Bundle/SimpleBundleResolver.php';

        return $this->services['hautelook_alice.resolver.bundle'] = new \Hautelook\AliceBundle\Resolver\Bundle\NoBundleResolver(new \Hautelook\AliceBundle\Resolver\Bundle\SimpleBundleResolver(($this->services['kernel'] ?? $this->get('kernel', 1))));
    }

    /**
     * Gets the public 'hautelook_alice.resolver.file' shared service.
     *
     * @return \Hautelook\AliceBundle\Resolver\File\KernelFileResolver
     */
    protected function getHautelookAlice_Resolver_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/FileResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Resolver/File/KernelFileResolver.php';

        return $this->services['hautelook_alice.resolver.file'] = new \Hautelook\AliceBundle\Resolver\File\KernelFileResolver(($this->services['kernel'] ?? $this->get('kernel', 1)));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->getDebug_ArgumentResolver_RequestAttributeService());
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->getDebug_ArgumentResolver_RequestService());
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->getDebug_ArgumentResolver_SessionService());
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->getDebug_Security_UserValueResolverService());
            yield 4 => ($this->privates['debug.EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\AdminContextResolver'] ?? $this->getAdminContextResolverService());
            yield 5 => ($this->privates['debug.argument_resolver.service'] ?? $this->getDebug_ArgumentResolver_ServiceService());
            yield 6 => ($this->privates['debug.argument_resolver.default'] ?? $this->getDebug_ArgumentResolver_DefaultService());
            yield 7 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->getDebug_ArgumentResolver_VariadicService());
            yield 8 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->getDebug_ArgumentResolver_NotTaggedControllerService());
        }, 9)), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.check_config_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand
     */
    protected function getLexikJwtAuthentication_CheckConfigCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Command/CheckConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        $this->services['lexik_jwt_authentication.check_config_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE')))), 'RS256');

        $instance->setName('lexik:jwt:check-config');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.encoder' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder
     */
    protected function getLexikJwtAuthentication_EncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Encoder/JWTEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Encoder/HeaderAwareJWTEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Encoder/LcobucciJWTEncoder.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/JWSProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/LcobucciJWSProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        return $this->services['lexik_jwt_authentication.encoder'] = new \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder(new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE')))), 'openssl', 'RS256', $this->getEnv('JWT_TOKEN_TTL'), 0));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.generate_token_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand
     */
    protected function getLexikJwtAuthentication_GenerateTokenCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Command/GenerateTokenCommand.php';

        $this->services['lexik_jwt_authentication.generate_token_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->getLexikJwtAuthentication_JwtManagerService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.user'] ?? $this->getSecurity_User_Provider_Concrete_UserService());
            yield 1 => ($this->privates['security.user.provider.concrete.admin'] ?? $this->getSecurity_User_Provider_Concrete_AdminService());
        }, 2));

        $instance->setName('lexik:jwt:generate-token');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.jwt_manager' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager
     */
    protected function getLexikJwtAuthentication_JwtManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWTManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWTTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWTManager.php';

        $this->services['lexik_jwt_authentication.jwt_manager'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager(($this->services['lexik_jwt_authentication.encoder'] ?? $this->getLexikJwtAuthentication_EncoderService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'username');

        $instance->setUserIdentityField('username');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.key_loader' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader
     */
    protected function getLexikJwtAuthentication_KeyLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        return $this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE'));
    }

    /**
     * Gets the public 'nelmio_alice.data_loader' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleDataLoader
     */
    protected function getNelmioAlice_DataLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/DataLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Loader/SimpleDataLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/SimpleBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/SimpleDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/ParameterBagDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Parameter/SimpleParameterBagDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FixtureBagDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SimpleFixtureBagDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/TolerantFixtureDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/ElementFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/FlagParserRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/ChainableFlagParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/ConfiguratorFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/ExtendFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/OptionalFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/TemplateFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParser/Chainable/UniqueFlagParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/ChainableFixtureDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/CollectionDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/FlagParserAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/SimpleCollectionDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/CollectionDenormalizerWithTemporaryFixture.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/NullListNameDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/ReferenceRangeNameDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationsDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/SimpleSpecificationsDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/ConstructorDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Constructor/LegacyConstructorDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Constructor/ConstructorDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/ArgumentsDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Arguments/SimpleArgumentsDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/ValueDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Value/UniqueValueDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Value/SimpleValueDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/FunctionFixtureReferenceParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/StringMergerParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/SimpleParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/LexerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/EmptyValueLexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/ReferenceEscaperLexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/GlobalPatternsLexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/FunctionLexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/StringThenReferenceLexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/SubPatternsLexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/ReferenceLexer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/ParserAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/TokenParserRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/ChainableTokenParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/AbstractChainableParserAwareParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/DynamicArrayTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/EscapedValueTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/FixtureListReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/FixtureMethodReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/FixtureRangeReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/MethodReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/OptionalTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/ParameterTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/PropertyReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/VariableReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/SimpleReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/StringArrayTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/StringTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/ArgumentEscaper.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/TolerantFunctionTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/IdentityTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/FunctionTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/VariableTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/WildcardReferenceTokenParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Constructor/FactoryDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/CallsDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/CallsWithFlagsDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/FunctionDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/MethodFlagHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/MethodFlagHandler/ConfiguratorFlagHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/MethodFlagHandler/OptionalFlagHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/PropertyDenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Property/SimplePropertyDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/NullRangeNameDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/Chainable/SimpleDenormalizer.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/DoublePassGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/FixtureSetResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/FixtureSet/RemoveConflictingObjectsResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/FixtureSet/SimpleFixtureSetResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ParameterBagResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/RemoveConflictingParametersParameterBagResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/SimpleParameterBagResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/ParameterResolverRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ChainableParameterResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/Chainable/StaticParameterResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/ParameterResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/Chainable/ArrayParameterResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/Chainable/RecursiveParameterResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Parameter/Chainable/StringParameterResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/FixtureBagResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Fixture/TemplateFixtureBagResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGenerator/CompleteObjectGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGenerator/SimpleObjectGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ObjectGeneratorAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/ValueResolverRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/ChainableValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ArrayValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/DynamicArrayValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/EvaluatedValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FunctionCallArgumentResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/PhpFunctionCallValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FakerFunctionCallValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FixturePropertyReferenceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/PropertyAccess/StdPropertyAccessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FixtureMethodCallReferenceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/UnresolvedFixtureReferenceIdResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/SelfFixtureReferenceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FixtureReferenceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/FixtureWildcardReferenceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ListValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/OptionalValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ParameterValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/UniqueValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/UniqueValuesPool.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/ValueForCurrentValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/VariableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/InstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ExistingInstanceInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/InstantiatorResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/InstantiatorRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/ChainableInstantiatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/AbstractChainableInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NoCallerMethodCallInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/NamedArgumentsResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NullConstructorInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/NoMethodCallInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Instantiator/Chainable/StaticFactoryInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Alice/Generator/Instantiator/Chainable/InstantiatedReferenceInstantiator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/HydratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Hydrator/SimpleHydrator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Hydrator/PropertyHydratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Hydrator/Property/SymfonyPropertyAccessorHydrator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/CallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/SimpleCaller.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/ChainableCallProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/CallProcessorAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/ConfiguratorMethodCallProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/MethodCallWithReferenceProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/OptionalMethodCallProcessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Generator/Caller/Chainable/SimpleMethodCallProcessor.php';

        $a = new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\ElementFlagParser(new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\FlagParserRegistry([0 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ConfiguratorFlagParser(), 1 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\ExtendFlagParser(), 2 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\OptionalFlagParser(), 3 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\TemplateFlagParser(), 4 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\FlagParser\Chainable\UniqueFlagParser()]));
        $b = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ArgumentEscaper();

        $c = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\UniqueValueDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Value\SimpleValueDenormalizer(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\FunctionFixtureReferenceParser(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\StringMergerParser(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\SimpleParser(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\EmptyValueLexer(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexer(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\GlobalPatternsLexer(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\FunctionLexer(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\StringThenReferenceLexer(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\SubPatternsLexer(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceLexer())))))), new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\TokenParserRegistry([0 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\DynamicArrayTokenParser(), 1 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\EscapedValueTokenParser(), 2 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureListReferenceTokenParser(), 3 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureMethodReferenceTokenParser(), 4 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FixtureRangeReferenceTokenParser(), 5 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\MethodReferenceTokenParser(), 6 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\OptionalTokenParser(), 7 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ParameterTokenParser(), 8 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\PropertyReferenceTokenParser(), 9 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableReferenceTokenParser(), 10 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\SimpleReferenceTokenParser(), 11 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringArrayTokenParser(), 12 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringTokenParser($b), 13 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\TolerantFunctionTokenParser(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\IdentityTokenParser(new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\FunctionTokenParser($b))), 14 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\VariableTokenParser(), 15 => new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\WildcardReferenceTokenParser()]))))));

        $d = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Arguments\SimpleArgumentsDenormalizer($c);
        $e = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\CallsWithFlagsDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\FunctionDenormalizer($d), [0 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\ConfiguratorFlagHandler(), 1 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\OptionalFlagHandler()]);

        $f = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\SimpleSpecificationsDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\LegacyConstructorDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\ConstructorDenormalizer($d), new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\FactoryDenormalizer($e)), new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Property\SimplePropertyDenormalizer($c), $e);
        $g = new \Nelmio\Alice\PropertyAccess\StdPropertyAccessor(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));

        $h = new \Nelmio\Alice\Generator\Resolver\Value\ValueResolverRegistry([0 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ArrayValueResolver(), 1 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\DynamicArrayValueResolver(), 2 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\EvaluatedValueResolver(), 3 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FunctionCallArgumentResolver(new \Nelmio\Alice\Generator\Resolver\Value\Chainable\PhpFunctionCallValueResolver($this->parameters['nelmio_alice.functions_blacklist'], new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FakerFunctionCallValueResolver(($this->services['Faker\\Generator'] ?? $this->getGeneratorService())))), 4 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixturePropertyReferenceResolver($g), 5 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureMethodCallReferenceResolver(), 6 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\UnresolvedFixtureReferenceIdResolver(new \Nelmio\Alice\Generator\Resolver\Value\Chainable\SelfFixtureReferenceResolver(new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureReferenceResolver())), 7 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\FixtureWildcardReferenceResolver(), 8 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ListValueResolver(), 9 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\OptionalValueResolver(), 10 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ParameterValueResolver(), 11 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\UniqueValueResolver(new \Nelmio\Alice\Generator\Resolver\UniqueValuesPool(), NULL, 150), 12 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\ValueForCurrentValueResolver(), 13 => new \Nelmio\Alice\Generator\Resolver\Value\Chainable\VariableValueResolver()]);
        $i = new \Nelmio\Alice\Generator\NamedArgumentsResolver();
        $j = new \Hautelook\AliceBundle\Alice\Generator\Instantiator\Chainable\InstantiatedReferenceInstantiator();
        $j->setContainer($this);

        return $this->services['nelmio_alice.data_loader'] = new \Nelmio\Alice\Loader\SimpleDataLoader(new \Nelmio\Alice\FixtureBuilder\SimpleBuilder(new \Nelmio\Alice\FixtureBuilder\Denormalizer\SimpleDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Parameter\SimpleParameterBagDenormalizer(), new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SimpleFixtureBagDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\TolerantFixtureDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\FixtureDenormalizerRegistry($a, [0 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixture(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\NullListNameDenormalizer())), 1 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\ReferenceRangeNameDenormalizer($f), 2 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleCollectionDenormalizer(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\CollectionDenormalizerWithTemporaryFixture(new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\NullRangeNameDenormalizer())), 3 => new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\Chainable\SimpleDenormalizer($f)])), $a))), new \Nelmio\Alice\Generator\DoublePassGenerator(new \Nelmio\Alice\Generator\Resolver\FixtureSet\RemoveConflictingObjectsResolver(new \Nelmio\Alice\Generator\Resolver\FixtureSet\SimpleFixtureSetResolver(new \Nelmio\Alice\Generator\Resolver\Parameter\RemoveConflictingParametersParameterBagResolver(new \Nelmio\Alice\Generator\Resolver\Parameter\SimpleParameterBagResolver(new \Nelmio\Alice\Generator\Resolver\Parameter\ParameterResolverRegistry([0 => new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StaticParameterResolver(), 1 => new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\ArrayParameterResolver(), 2 => new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\RecursiveParameterResolver(new \Nelmio\Alice\Generator\Resolver\Parameter\Chainable\StringParameterResolver(), 5)]))), new \Nelmio\Alice\Generator\Resolver\Fixture\TemplateFixtureBagResolver())), new \Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenerator(new \Nelmio\Alice\Generator\ObjectGenerator\SimpleObjectGenerator($h, new \Nelmio\Alice\Generator\Instantiator\ExistingInstanceInstantiator(new \Nelmio\Alice\Generator\Instantiator\InstantiatorResolver(new \Nelmio\Alice\Generator\Instantiator\InstantiatorRegistry([0 => new \Nelmio\Alice\Generator\Instantiator\Chainable\NoCallerMethodCallInstantiator($i), 1 => new \Nelmio\Alice\Generator\Instantiator\Chainable\NullConstructorInstantiator(), 2 => new \Nelmio\Alice\Generator\Instantiator\Chainable\NoMethodCallInstantiator(), 3 => new \Nelmio\Alice\Generator\Instantiator\Chainable\StaticFactoryInstantiator($i), 4 => $j]))), new \Nelmio\Alice\Generator\Hydrator\SimpleHydrator(new \Nelmio\Alice\Generator\Hydrator\Property\SymfonyPropertyAccessorHydrator($g)), new \Nelmio\Alice\Generator\Caller\SimpleCaller(new \Nelmio\Alice\Generator\Caller\CallProcessorRegistry([0 => new \Nelmio\Alice\Generator\Caller\Chainable\ConfiguratorMethodCallProcessor(), 1 => new \Nelmio\Alice\Generator\Caller\Chainable\MethodCallWithReferenceProcessor(), 2 => new \Nelmio\Alice\Generator\Caller\Chainable\OptionalMethodCallProcessor(), 3 => new \Nelmio\Alice\Generator\Caller\Chainable\SimpleMethodCallProcessor()]), $h, $i)))));
    }

    /**
     * Gets the public 'nelmio_alice.file_loader' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleFileLoader
     */
    protected function getNelmioAlice_FileLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Loader/SimpleFileLoader.php';

        return $this->services['nelmio_alice.file_loader'] = new \Nelmio\Alice\Loader\SimpleFileLoader(($this->privates['nelmio_alice.file_parser.runtime_cache'] ?? $this->getNelmioAlice_FileParser_RuntimeCacheService()), ($this->services['nelmio_alice.data_loader'] ?? $this->getNelmioAlice_DataLoaderService()));
    }

    /**
     * Gets the public 'nelmio_alice.files_loader' shared service.
     *
     * @return \Nelmio\Alice\Loader\SimpleFilesLoader
     */
    protected function getNelmioAlice_FilesLoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FilesLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Loader/SimpleFilesLoader.php';

        return $this->services['nelmio_alice.files_loader'] = new \Nelmio\Alice\Loader\SimpleFilesLoader(($this->privates['nelmio_alice.file_parser.runtime_cache'] ?? $this->getNelmioAlice_FileParser_RuntimeCacheService()), ($this->services['nelmio_alice.data_loader'] ?? $this->getNelmioAlice_DataLoaderService()));
    }

    /**
     * Gets the public 'php_translation.cache_clearer' shared service.
     *
     * @return \Translation\Bundle\Service\CacheClearer
     *
     * @deprecated The "php_translation.cache_clearer" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_CacheClearerService()
    {
        @trigger_error('The "php_translation.cache_clearer" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->services['php_translation.cache_clearer'] = new \Translation\Bundle\Service\CacheClearer($this->targetDir.'', ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));
    }

    /**
     * Gets the public 'php_translation.catalogue_counter' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueCounter
     *
     * @deprecated The "php_translation.catalogue_counter" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_CatalogueCounterService()
    {
        @trigger_error('The "php_translation.catalogue_counter" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['php_translation.catalogue_counter'] = new \Translation\Bundle\Catalogue\CatalogueCounter();
    }

    /**
     * Gets the public 'php_translation.catalogue_fetcher' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueFetcher
     *
     * @deprecated The "php_translation.catalogue_fetcher" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_CatalogueFetcherService()
    {
        @trigger_error('The "php_translation.catalogue_fetcher" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['php_translation.catalogue_fetcher'] = new \Translation\Bundle\Catalogue\CatalogueFetcher(($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()));
    }

    /**
     * Gets the public 'php_translation.catalogue_manager' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueManager
     *
     * @deprecated The "php_translation.catalogue_manager" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_CatalogueManagerService()
    {
        @trigger_error('The "php_translation.catalogue_manager" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['php_translation.catalogue_manager'] = new \Translation\Bundle\Catalogue\CatalogueManager();
    }

    /**
     * Gets the public 'php_translation.catalogue_writer' shared service.
     *
     * @return \Translation\Bundle\Catalogue\CatalogueWriter
     *
     * @deprecated The "php_translation.catalogue_writer" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_CatalogueWriterService()
    {
        @trigger_error('The "php_translation.catalogue_writer" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['php_translation.catalogue_writer'] = new \Translation\Bundle\Catalogue\CatalogueWriter(($this->privates['translation.writer'] ?? $this->getTranslation_WriterService()), 'fr');
    }

    /**
     * Gets the public 'php_translation.configuration_manager' shared service.
     *
     * @return \Translation\Bundle\Service\ConfigurationManager
     *
     * @deprecated The "php_translation.configuration_manager" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_ConfigurationManagerService()
    {
        @trigger_error('The "php_translation.configuration_manager" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        $this->services['php_translation.configuration_manager'] = $instance = new \Translation\Bundle\Service\ConfigurationManager();

        $instance->addConfiguration('app', ($this->privates['php_translation.configuration.app'] ?? $this->getPhpTranslation_Configuration_AppService()));

        return $instance;
    }

    /**
     * Gets the public 'php_translation.importer' shared service.
     *
     * @return \Translation\Bundle\Service\Importer
     *
     * @deprecated The "php_translation.importer" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_ImporterService()
    {
        @trigger_error('The "php_translation.importer" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['php_translation.importer'] = new \Translation\Bundle\Service\Importer(($this->privates['Translation\\Extractor\\Extractor'] ?? $this->getExtractorService()), ($this->services['twig'] ?? $this->getTwigService()), 'fr');
    }

    /**
     * Gets the public 'php_translation.storage.app' shared service.
     *
     * @return \Translation\Bundle\Service\StorageService
     */
    protected function getPhpTranslation_Storage_AppService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/common/src/Storage.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Service/StorageService.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/common/src/TransferableStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-storage/src/FileStorage.php';

        $this->services['php_translation.storage.app'] = $instance = new \Translation\Bundle\Service\StorageService(($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()), ($this->privates['php_translation.configuration.app'] ?? $this->getPhpTranslation_Configuration_AppService()));

        $instance->addLocalStorage(new \Translation\SymfonyStorage\FileStorage(($this->privates['translation.writer'] ?? $this->getTranslation_WriterService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), [0 => (\dirname(__DIR__, 4).'/translations')], []));

        return $instance;
    }

    /**
     * Gets the public 'php_translation.storage_manager' shared service.
     *
     * @return \Translation\Bundle\Service\StorageManager
     *
     * @deprecated The "php_translation.storage_manager" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslation_StorageManagerService()
    {
        @trigger_error('The "php_translation.storage_manager" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        $this->services['php_translation.storage_manager'] = $instance = new \Translation\Bundle\Service\StorageManager();

        $instance->addStorage('app', ($this->services['php_translation.storage.app'] ?? $this->getPhpTranslation_Storage_AppService()));

        return $instance;
    }

    /**
     * Gets the public 'php_translator.console.delete_obsolete' shared service.
     *
     * @return \Translation\Bundle\Command\DeleteObsoleteCommand
     *
     * @deprecated The "php_translator.console.delete_obsolete" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslator_Console_DeleteObsoleteService()
    {
        @trigger_error('The "php_translator.console.delete_obsolete" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueManager.php';

        return $this->services['php_translator.console.delete_obsolete'] = new \Translation\Bundle\Command\DeleteObsoleteCommand(($this->services['Translation\\Bundle\\Service\\StorageManager'] ?? $this->getStorageManagerService()), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueManager'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueManager'] = new \Translation\Bundle\Catalogue\CatalogueManager())), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()));
    }

    /**
     * Gets the public 'php_translator.console.download' shared service.
     *
     * @return \Translation\Bundle\Command\DownloadCommand
     *
     * @deprecated The "php_translator.console.download" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslator_Console_DownloadService()
    {
        @trigger_error('The "php_translator.console.download" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['php_translator.console.download'] = new \Translation\Bundle\Command\DownloadCommand(($this->services['Translation\\Bundle\\Service\\StorageManager'] ?? $this->getStorageManagerService()), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Service\\CacheClearer'] ?? $this->getCacheClearerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueWriter'] ?? $this->getCatalogueWriterService()));
    }

    /**
     * Gets the public 'php_translator.console.extract' shared service.
     *
     * @return \Translation\Bundle\Command\ExtractCommand
     *
     * @deprecated The "php_translator.console.extract" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslator_Console_ExtractService()
    {
        @trigger_error('The "php_translator.console.extract" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueCounter.php';

        return $this->services['php_translator.console.extract'] = new \Translation\Bundle\Command\ExtractCommand(($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueWriter'] ?? $this->getCatalogueWriterService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] = new \Translation\Bundle\Catalogue\CatalogueCounter())), ($this->services['Translation\\Bundle\\Service\\Importer'] ?? $this->getImporterService()), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()));
    }

    /**
     * Gets the public 'php_translator.console.status' shared service.
     *
     * @return \Translation\Bundle\Command\StatusCommand
     *
     * @deprecated The "php_translator.console.status" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslator_Console_StatusService()
    {
        @trigger_error('The "php_translator.console.status" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Catalogue/CatalogueCounter.php';

        return $this->services['php_translator.console.status'] = new \Translation\Bundle\Command\StatusCommand(($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] ?? ($this->services['Translation\\Bundle\\Catalogue\\CatalogueCounter'] = new \Translation\Bundle\Catalogue\CatalogueCounter())), ($this->services['Translation\\Bundle\\Service\\ConfigurationManager'] ?? $this->getConfigurationManagerService()), ($this->services['Translation\\Bundle\\Catalogue\\CatalogueFetcher'] ?? $this->getCatalogueFetcherService()));
    }

    /**
     * Gets the public 'php_translator.console.sync' shared service.
     *
     * @return \Translation\Bundle\Command\SyncCommand
     *
     * @deprecated The "php_translator.console.sync" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPhpTranslator_Console_SyncService()
    {
        @trigger_error('The "php_translator.console.sync" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['php_translator.console.sync'] = new \Translation\Bundle\Command\SyncCommand(($this->services['Translation\\Bundle\\Service\\StorageManager'] ?? $this->getStorageManagerService()));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('cache.doctrine.orm.default.metadata', ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $d->addInstance('cache.doctrine.orm.default.result', ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $d->addInstance('api_platform.cache.route_name_resolver', ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()));
        $d->addInstance('api_platform.cache.identifiers_extractor', ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()));
        $d->addInstance('api_platform.cache.subresource_operation_factory', ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()));
        $d->addInstance('api_platform.cache.metadata.resource', ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()));
        $d->addInstance('api_platform.cache.metadata.property', ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()));
        $e = ($this->services['translator'] ?? $this->getTranslatorService());
        $f = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();
        $f->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));
        $g = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $g->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $h = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $h->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataCollector\RequestDataCollector(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), ($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['debug.api_platform.data_persister'] ?? $this->getDebug_ApiPlatform_DataPersisterService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/App_KernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($e));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($f);
        $instance->add($g);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add(new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($e));
        $instance->add(($this->privates['App\\DataCollector\\ListUserCollector'] ?? $this->getListUserCollectorService()));
        $instance->add(new \Symfony\Component\Mailer\DataCollector\MessageDataCollector(($this->privates['mailer.logger_message_listener'] ?? ($this->privates['mailer.logger_message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageLoggerListener()))));
        $instance->add(new \Vich\UploaderBundle\DataCollector\MappingCollector(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService())));
        $instance->add(new \EasyCorp\Bundle\EasyAdminBundle\Inspector\DataCollector(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService())));
        $instance->add($h);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService', false],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'fr');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Routing/ApiLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = ($this->services['kernel'] ?? $this->get('kernel', 1));

        $c = new \Symfony\Component\HttpKernel\Config\FileLocator($b);
        $d = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'kernel' => ['services', 'kernel', 'getKernelService', false],
        ], [
            'kernel' => 'App\\Kernel',
        ])));
        $a->addLoader(new \ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader($b, ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $this, $this->parameters['api_platform.formats'], $this->parameters['api_platform.resource_class_directories'], ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()), true, true, true, true, false));
        $a->addLoader($d);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($c, $d));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($c, $d));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true]);
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationUtils.php';

        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/CsrfTokenManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php';

        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), ($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php';

        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $b = ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService());
        $c = ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService());
        $d = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());
        $e = ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService());
        $f = ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])));

        $g = new \ApiPlatform\Core\Swagger\Serializer\ApiGatewayNormalizer(new \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer($a, $b, $c, ($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()), ($this->privates['api_platform.json_schema.type_factory'] ?? $this->getApiPlatform_JsonSchema_TypeFactoryService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver($d, ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $e), NULL, $f, NULL, false, 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', [], $this->parameters['api_platform.swagger.api_keys'], $e, true, 'page', false, 'itemsPerPage', $this->parameters['api_platform.formats'], false, 'pagination', $this->parameters['api_platform.swagger.versions']));
        $h = ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService());
        $i = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());
        $j = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());
        $k = ($this->privates['api_platform.jsonld.context_builder'] ?? $this->getApiPlatform_Jsonld_ContextBuilderService());
        $l = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $m = ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService());
        $n = ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService());
        $o = ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService());
        $p = new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($m, $h, $l, ($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($m), NULL, []);

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => $g, 1 => new \ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer($d, [], $h), 2 => new \ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer([], $h), 3 => $g, 4 => new \ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer($a, $b, $c, $i, NULL, $d, $e, $h), 5 => new \ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer($a, $j, $d), 6 => new \ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer($d, true), 7 => new \ApiPlatform\Core\Problem\Serializer\ErrorNormalizer(true), 8 => new \Symfony\Component\Serializer\Normalizer\ProblemNormalizer(true), 9 => new \ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer($a, $b, $c, $j, $i, $k, $l, $h, $m, [], new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), false), 10 => new \ApiPlatform\Core\GraphQl\Serializer\ItemNormalizer($b, $c, $j, $n, $i, $l, $h, $m, $o, false, NULL, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), $a), 11 => new \ApiPlatform\Core\Serializer\ItemNormalizer($b, $c, $j, $i, $l, $h, $m, $o, false, NULL, new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), $a, false), 12 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 13 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer([], $h), 15 => new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer(), 16 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 17 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(($this->privates['mime_types'] ?? $this->getMimeTypesService())), 18 => new \ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer(new \ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer(new \ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer($k, $i, $j), 'page', 'pagination', $a, $l), $a, $i, $f), 19 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 20 => new \ApiPlatform\Core\JsonLd\Serializer\ObjectNormalizer($p, $j, $k), 21 => new \ApiPlatform\Core\GraphQl\Serializer\ObjectNormalizer($p, $j, $n), 22 => $p], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 4 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonld'), 5 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonproblem')]);
    }

    /**
     * Gets the public 'services_resetter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter
     */
    protected function getServicesResetterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

        return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
            if (isset($this->privates['App\\DataCollector\\ListUserCollector'])) {
                yield 'App\\DataCollector\\ListUserCollector' => ($this->privates['App\\DataCollector\\ListUserCollector'] ?? null);
            }
            if (isset($this->services['cache.app'])) {
                yield 'cache.app' => ($this->services['cache.app'] ?? null);
            }
            if (isset($this->services['cache.system'])) {
                yield 'cache.system' => ($this->services['cache.system'] ?? null);
            }
            if (isset($this->privates['cache.validator'])) {
                yield 'cache.validator' => ($this->privates['cache.validator'] ?? null);
            }
            if (isset($this->privates['cache.serializer'])) {
                yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? null);
            }
            if (isset($this->privates['cache.annotations'])) {
                yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? null);
            }
            if (isset($this->privates['cache.property_info'])) {
                yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? null);
            }
            if (isset($this->privates['form.choice_list_factory.cached'])) {
                yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
            }
            if (isset($this->services['profiler'])) {
                yield 'profiler' => ($this->services['profiler'] ?? null);
            }
            if (isset($this->services['validator'])) {
                yield 'debug.validator' => ($this->services['validator'] ?? null);
            }
            if (isset($this->privates['debug.stopwatch'])) {
                yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
            }
            if (isset($this->services['event_dispatcher'])) {
                yield 'debug.event_dispatcher' => ($this->services['event_dispatcher'] ?? null);
            }
            if (isset($this->services['doctrine'])) {
                yield 'doctrine' => ($this->services['doctrine'] ?? null);
            }
            if (isset($this->privates['form.type.entity'])) {
                yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
            }
            if (isset($this->services['security.token_storage'])) {
                yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
            }
            if (isset($this->privates['cache.security_expression_language'])) {
                yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? null);
            }
            if (isset($this->privates['monolog.handler.main'])) {
                yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
            }
            if (isset($this->privates['monolog.handler.console'])) {
                yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.route_name_resolver'])) {
                yield 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.identifiers_extractor'])) {
                yield 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.subresource_operation_factory'])) {
                yield 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.metadata.resource'])) {
                yield 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? null);
            }
            if (isset($this->privates['api_platform.cache.metadata.property'])) {
                yield 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? null);
            }
            if (isset($this->privates['swiftmailer.email_sender.listener'])) {
                yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset($this->privates['App\\DataCollector\\ListUserCollector'])) + (int) (isset($this->services['cache.app'])) + (int) (isset($this->services['cache.system'])) + (int) (isset($this->privates['cache.validator'])) + (int) (isset($this->privates['cache.serializer'])) + (int) (isset($this->privates['cache.annotations'])) + (int) (isset($this->privates['cache.property_info'])) + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['event_dispatcher'])) + (int) (isset($this->services['doctrine'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['cache.security_expression_language'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['api_platform.cache.route_name_resolver'])) + (int) (isset($this->privates['api_platform.cache.identifiers_extractor'])) + (int) (isset($this->privates['api_platform.cache.subresource_operation_factory'])) + (int) (isset($this->privates['api_platform.cache.metadata.resource'])) + (int) (isset($this->privates['api_platform.cache.metadata.property'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener']));
        }), ['App\\DataCollector\\ListUserCollector' => [0 => 'reset'], 'cache.app' => [0 => 'reset'], 'cache.system' => [0 => 'reset'], 'cache.validator' => [0 => 'reset'], 'cache.serializer' => [0 => 'reset'], 'cache.annotations' => [0 => 'reset'], 'cache.property_info' => [0 => 'reset'], 'form.choice_list_factory.cached' => [0 => 'reset'], 'profiler' => [0 => 'reset'], 'debug.validator' => [0 => 'reset'], 'debug.stopwatch' => [0 => 'reset'], 'debug.event_dispatcher' => [0 => 'reset'], 'doctrine' => [0 => 'reset'], 'form.type.entity' => [0 => 'reset'], 'security.token_storage' => [0 => 'disableUsageTracking', 1 => 'setToken'], 'cache.security_expression_language' => [0 => 'reset'], 'monolog.handler.main' => [0 => 'reset'], 'monolog.handler.console' => [0 => 'reset'], 'api_platform.cache.route_name_resolver' => [0 => 'reset'], 'api_platform.cache.identifiers_extractor' => [0 => 'reset'], 'api_platform.cache.subresource_operation_factory' => [0 => 'reset'], 'api_platform.cache.metadata.resource' => [0 => 'reset'], 'api_platform.cache.metadata.property' => [0 => 'reset'], 'swiftmailer.email_sender.listener' => [0 => 'reset']]);
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Session.php';

        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(($this->privates['session.storage.native'] ?? $this->getSession_Storage_NativeService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php';

        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(($this->services['swiftmailer.transport'] ?? $this->getSwiftmailer_TransportService()));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/DependencyInjection/SwiftmailerTransportFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';

        return $this->services['swiftmailer.mailer.default.transport.real'] = \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SwiftmailerTransportFactory::createTransport(['transport' => 'smtp', 'url' => $this->getEnv('MAILER_URL'), 'username' => NULL, 'password' => NULL, 'host' => 'localhost', 'port' => NULL, 'timeout' => 30, 'source_ip' => NULL, 'local_domain' => NULL, 'encryption' => NULL, 'auth_mode' => NULL, 'command' => '/usr/sbin/sendmail -bs'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())));
    }

    /**
     * Gets the public 'swiftmailer.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_TransportService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SpoolTransport.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_SpoolTransport(($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? ($this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher())), new \Swift_MemorySpool());

        $instance->registerPlugin(($this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? ($this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger())));

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(($this->privates['translator.default'] ?? $this->getTranslator_DefaultService()));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/Resources/views'), 'Debug');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/Resources/views'), '!Debug');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Resources/views'), 'Translation');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Resources/views'), '!Translation');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/templates'), 'VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/templates'), '!VichUploader');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/EasyAdminBundle'), 'EasyAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), 'EasyAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/views'), '!EasyAdmin');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => true, 'strict_variables' => true]);

        $b = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
        $c = ($this->services['translator'] ?? $this->getTranslatorService());
        $d = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $e = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $f = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $f->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $e]);
        $g = new \Symfony\Bridge\Twig\AppVariable();
        $g->setEnvironment('dev');
        $g->setDebug(true);
        if ($this->has('security.token_storage')) {
            $g->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $g->setRequestStack($d);
        }
        $h = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($d, '', false)), [])));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($e, \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService())));
        $instance->addExtension(new \App\Twig\GlobalExtension());
        $instance->addExtension(new \App\Twig\MyExtension());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($f));
        $instance->addExtension(new \Translation\Bundle\Twig\TranslationExtension($c, true));
        $instance->addExtension(new \Vich\UploaderBundle\Twig\Extension\UploaderExtension(new \Vich\UploaderBundle\Templating\Helper\UploaderHelper(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()))));
        $instance->addExtension(new \EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $this->getCrudUrlGeneratorService()), $c));
        $instance->addGlobal('app', $g);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', false],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', false],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', false],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->registerUndefinedFilterCallback([0 => $h, 1 => 'suggestFilter']);
        $instance->registerUndefinedFunctionCallback([0 => $h, 1 => 'suggestFunction']);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /**
     * Gets the public 'vich_uploader.download_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\DownloadHandler
     */
    protected function getVichUploader_DownloadHandlerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Handler/DownloadHandler.php';

        return $this->services['vich_uploader.download_handler'] = new \Vich\UploaderBundle\Handler\DownloadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()));
    }

    /**
     * Gets the public 'vich_uploader.form.type.file' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichFileType
     */
    protected function getVichUploader_Form_Type_FileService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Form/Type/VichFileType.php';

        return $this->services['vich_uploader.form.type.file'] = new \Vich\UploaderBundle\Form\Type\VichFileType(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()), ($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the public 'vich_uploader.form.type.image' shared service.
     *
     * @return \Vich\UploaderBundle\Form\Type\VichImageType
     */
    protected function getVichUploader_Form_Type_ImageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Form/Type/VichFileType.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Form/Type/VichImageType.php';

        return $this->services['vich_uploader.form.type.image'] = new \Vich\UploaderBundle\Form\Type\VichImageType(($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService()), ($this->services['vich_uploader.upload_handler'] ?? $this->getVichUploader_UploadHandlerService()), ($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), NULL);
    }

    /**
     * Gets the public 'vich_uploader.upload_handler' shared service.
     *
     * @return \Vich\UploaderBundle\Handler\UploadHandler
     */
    protected function getVichUploader_UploadHandlerService()
    {
        $a = ($this->privates['vich_uploader.storage.file_system'] ?? $this->getVichUploader_Storage_FileSystemService());

        return $this->services['vich_uploader.upload_handler'] = new \Vich\UploaderBundle\Handler\UploadHandler(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()), $a, new \Vich\UploaderBundle\Injector\FileInjector($a), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the public 'web_profiler.controller.exception_panel' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController
     */
    protected function getWebProfiler_Controller_ExceptionPanelService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/ExceptionPanelController.php';

        return $this->services['web_profiler.controller.exception_panel'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController(($this->privates['error_handler.error_renderer.html'] ?? $this->getErrorHandler_ErrorRenderer_HtmlService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/ProfilerController.php';

        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($this->services['router'] ?? $this->getRouterService()), ($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), $this->parameters['data_collector.templates'], ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/RouterController.php';

        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $b = new \Symfony\Bridge\Monolog\Logger('http_client');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setLogger($b);

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /**
     * Gets the private '.errored..service_locator..i55Rhi.EasyCorp\Bundle\EasyAdminBundle\Config\Crud' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Crud
     */
    protected function getCrudService()
    {
        $this->throw('Cannot autowire service ".service_locator..i55Rhi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.9Bk06Bg.EasyCorp\Bundle\EasyAdminBundle\Config\Actions' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Actions
     */
    protected function getActionsService()
    {
        $this->throw('Cannot autowire service ".service_locator.9Bk06Bg": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.JGYCiBX.EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore
     */
    protected function getKeyValueStoreService()
    {
        $this->throw('Cannot autowire service ".service_locator.JGYCiBX": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.VqGJT2v.App\Entity\User' shared service.
     *
     * @return \App\Entity\User
     */
    protected function getUserService()
    {
        $this->throw('Cannot autowire service ".service_locator.VqGJT2v": it references class "App\\Entity\\User" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.eWjpFVH.EasyCorp\Bundle\EasyAdminBundle\Config\Assets' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Assets
     */
    protected function getAssetsService()
    {
        $this->throw('Cannot autowire service ".service_locator.eWjpFVH": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.ebihhh1.EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext
     */
    protected function getAdminContextService()
    {
        $this->throw('Cannot autowire service ".service_locator.ebihhh1": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.otZczst.EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection
     */
    protected function getFieldCollectionService()
    {
        $this->throw('Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.otZczst.EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection
     */
    protected function getFilterCollectionService()
    {
        $this->throw('Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.otZczst.EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto
     */
    protected function getEntityDtoService()
    {
        $this->throw('Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.otZczst.EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto
     */
    protected function getSearchDtoService()
    {
        $this->throw('Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.v.P6Zco.EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\KeyValueStore
     */
    protected function getKeyValueStore2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.v.P6Zco": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.v.P6Zco.EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext
     */
    protected function getAdminContext2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.v.P6Zco": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.v.P6Zco.EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto
     */
    protected function getEntityDto2Service()
    {
        $this->throw('Cannot autowire service ".service_locator.v.P6Zco": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.');
    }

    /**
     * Gets the private '.errored..service_locator.zABJvAy.Symfony\Component\Security\Core\User\UserInterface' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    protected function getUserInterfaceService()
    {
        $this->throw('Cannot autowire service ".service_locator.zABJvAy": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?');
    }

    /**
     * Gets the private '.errored..service_locator.zS98TBB.EasyCorp\Bundle\EasyAdminBundle\Config\Filters' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Config\Filters
     */
    protected function getFiltersService()
    {
        $this->throw('Cannot autowire service ".service_locator.zS98TBB": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters" but no such service exists.');
    }

    /**
     * Gets the private '.service_locator..i55Rhi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator__I55RhiService()
    {
        return $this->privates['.service_locator..i55Rhi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'crud' => ['privates', '.errored..service_locator..i55Rhi.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud', NULL, 'Cannot autowire service ".service_locator..i55Rhi": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud" but no such service exists.'],
        ], [
            'crud' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Crud',
        ]);
    }

    /**
     * Gets the private '.service_locator.9Bk06Bg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_9Bk06BgService()
    {
        return $this->privates['.service_locator.9Bk06Bg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'actions' => ['privates', '.errored..service_locator.9Bk06Bg.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions', NULL, 'Cannot autowire service ".service_locator.9Bk06Bg": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.'],
        ], [
            'actions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions',
        ]);
    }

    /**
     * Gets the private '.service_locator.D6XybyG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_D6XybyGService()
    {
        return $this->privates['.service_locator.D6XybyG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'entityManager' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.JGYCiBX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_JGYCiBXService()
    {
        return $this->privates['.service_locator.JGYCiBX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'responseParameters' => ['privates', '.errored..service_locator.JGYCiBX.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.JGYCiBX": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'responseParameters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }

    /**
     * Gets the private '.service_locator.Lq2J.x9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Lq2J_X9Service()
    {
        return $this->privates['.service_locator.Lq2J.x9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }

    /**
     * Gets the private '.service_locator.RjXesPF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_RjXesPFService()
    {
        return $this->privates['.service_locator.RjXesPF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'authUtils' => ['services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', false],
        ], [
            'authUtils' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.SjDU5mj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_SjDU5mjService()
    {
        return $this->privates['.service_locator.SjDU5mj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'contactManager' => ['privates', 'App\\Manager\\ContactManager', 'getContactManagerService', false],
        ], [
            'contactManager' => 'App\\Manager\\ContactManager',
        ]);
    }

    /**
     * Gets the private '.service_locator.VqGJT2v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_VqGJT2vService()
    {
        return $this->privates['.service_locator.VqGJT2v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'data' => ['privates', '.errored..service_locator.VqGJT2v.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.VqGJT2v": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'data' => 'App\\Entity\\User',
        ]);
    }

    /**
     * Gets the private '.service_locator.eWjpFVH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_EWjpFVHService()
    {
        return $this->privates['.service_locator.eWjpFVH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'assets' => ['privates', '.errored..service_locator.eWjpFVH.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets', NULL, 'Cannot autowire service ".service_locator.eWjpFVH": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets" but no such service exists.'],
        ], [
            'assets' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Assets',
        ]);
    }

    /**
     * Gets the private '.service_locator.ebihhh1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Ebihhh1Service()
    {
        return $this->privates['.service_locator.ebihhh1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'context' => ['privates', '.errored..service_locator.ebihhh1.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.ebihhh1": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
        ]);
    }

    /**
     * Gets the private '.service_locator.gkOP6jo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_GkOP6joService()
    {
        return $this->privates['.service_locator.gkOP6jo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Controller\\Admin\\CityCrudController::autocomplete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController::configureActions' => ['privates', '.service_locator.9Bk06Bg', 'get_ServiceLocator_9Bk06BgService', false],
            'App\\Controller\\Admin\\CityCrudController::configureAssets' => ['privates', '.service_locator.eWjpFVH', 'get_ServiceLocator_EWjpFVHService', false],
            'App\\Controller\\Admin\\CityCrudController::configureCrud' => ['privates', '.service_locator..i55Rhi', 'get_ServiceLocator__I55RhiService', false],
            'App\\Controller\\Admin\\CityCrudController::configureFilters' => ['privates', '.service_locator.zS98TBB', 'get_ServiceLocator_ZS98TBBService', false],
            'App\\Controller\\Admin\\CityCrudController::configureResponseParameters' => ['privates', '.service_locator.JGYCiBX', 'get_ServiceLocator_JGYCiBXService', false],
            'App\\Controller\\Admin\\CityCrudController::createEditForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController::createEditFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.otZczst', 'get_ServiceLocator_OtZczstService', false],
            'App\\Controller\\Admin\\CityCrudController::createNewForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController::createNewFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController::delete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController::deleteEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\CityCrudController::detail' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController::edit' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController::index' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController::new' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController::persistEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\CityCrudController::renderFilters' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController::updateEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.zABJvAy', 'get_ServiceLocator_ZABJvAyService', false],
            'App\\Controller\\Admin\\HelpCrudController::autocomplete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController::configureActions' => ['privates', '.service_locator.9Bk06Bg', 'get_ServiceLocator_9Bk06BgService', false],
            'App\\Controller\\Admin\\HelpCrudController::configureAssets' => ['privates', '.service_locator.eWjpFVH', 'get_ServiceLocator_EWjpFVHService', false],
            'App\\Controller\\Admin\\HelpCrudController::configureCrud' => ['privates', '.service_locator..i55Rhi', 'get_ServiceLocator__I55RhiService', false],
            'App\\Controller\\Admin\\HelpCrudController::configureFilters' => ['privates', '.service_locator.zS98TBB', 'get_ServiceLocator_ZS98TBBService', false],
            'App\\Controller\\Admin\\HelpCrudController::configureResponseParameters' => ['privates', '.service_locator.JGYCiBX', 'get_ServiceLocator_JGYCiBXService', false],
            'App\\Controller\\Admin\\HelpCrudController::createEditForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController::createEditFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.otZczst', 'get_ServiceLocator_OtZczstService', false],
            'App\\Controller\\Admin\\HelpCrudController::createNewForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController::createNewFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController::delete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController::deleteEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\HelpCrudController::detail' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController::edit' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController::index' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController::new' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController::persistEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\HelpCrudController::renderFilters' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController::updateEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.9Bk06Bg', 'get_ServiceLocator_9Bk06BgService', false],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.eWjpFVH', 'get_ServiceLocator_EWjpFVHService', false],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator..i55Rhi', 'get_ServiceLocator__I55RhiService', false],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.zS98TBB', 'get_ServiceLocator_ZS98TBBService', false],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.JGYCiBX', 'get_ServiceLocator_JGYCiBXService', false],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.otZczst', 'get_ServiceLocator_OtZczstService', false],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\UserCrudController::removeUser' => ['privates', '.service_locator.lEYp0ee', 'get_ServiceLocator_LEYp0eeService', false],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController::statistic' => ['privates', '.service_locator.Lq2J.x9', 'get_ServiceLocator_Lq2J_X9Service', false],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Api\\EnabledUser::__invoke' => ['privates', '.service_locator.VqGJT2v', 'get_ServiceLocator_VqGJT2vService', false],
            'App\\Controller\\DefaultController::contact' => ['privates', '.service_locator.SjDU5mj', 'get_ServiceLocator_SjDU5mjService', false],
            'App\\Controller\\Security\\SecurityController::admin' => ['privates', '.service_locator.RjXesPF', 'get_ServiceLocator_RjXesPFService', false],
            'App\\Controller\\Security\\SecurityController::user' => ['privates', '.service_locator.RjXesPF', 'get_ServiceLocator_RjXesPFService', false],
            'App\\Controller\\Admin\\CityCrudController:autocomplete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController:configureActions' => ['privates', '.service_locator.9Bk06Bg', 'get_ServiceLocator_9Bk06BgService', false],
            'App\\Controller\\Admin\\CityCrudController:configureAssets' => ['privates', '.service_locator.eWjpFVH', 'get_ServiceLocator_EWjpFVHService', false],
            'App\\Controller\\Admin\\CityCrudController:configureCrud' => ['privates', '.service_locator..i55Rhi', 'get_ServiceLocator__I55RhiService', false],
            'App\\Controller\\Admin\\CityCrudController:configureFilters' => ['privates', '.service_locator.zS98TBB', 'get_ServiceLocator_ZS98TBBService', false],
            'App\\Controller\\Admin\\CityCrudController:configureResponseParameters' => ['privates', '.service_locator.JGYCiBX', 'get_ServiceLocator_JGYCiBXService', false],
            'App\\Controller\\Admin\\CityCrudController:createEditForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController:createEditFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.otZczst', 'get_ServiceLocator_OtZczstService', false],
            'App\\Controller\\Admin\\CityCrudController:createNewForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController:createNewFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\CityCrudController:delete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController:deleteEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\CityCrudController:detail' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController:edit' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController:index' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController:new' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController:persistEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\CityCrudController:renderFilters' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\CityCrudController:updateEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.zABJvAy', 'get_ServiceLocator_ZABJvAyService', false],
            'App\\Controller\\Admin\\HelpCrudController:autocomplete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController:configureActions' => ['privates', '.service_locator.9Bk06Bg', 'get_ServiceLocator_9Bk06BgService', false],
            'App\\Controller\\Admin\\HelpCrudController:configureAssets' => ['privates', '.service_locator.eWjpFVH', 'get_ServiceLocator_EWjpFVHService', false],
            'App\\Controller\\Admin\\HelpCrudController:configureCrud' => ['privates', '.service_locator..i55Rhi', 'get_ServiceLocator__I55RhiService', false],
            'App\\Controller\\Admin\\HelpCrudController:configureFilters' => ['privates', '.service_locator.zS98TBB', 'get_ServiceLocator_ZS98TBBService', false],
            'App\\Controller\\Admin\\HelpCrudController:configureResponseParameters' => ['privates', '.service_locator.JGYCiBX', 'get_ServiceLocator_JGYCiBXService', false],
            'App\\Controller\\Admin\\HelpCrudController:createEditForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController:createEditFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.otZczst', 'get_ServiceLocator_OtZczstService', false],
            'App\\Controller\\Admin\\HelpCrudController:createNewForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController:createNewFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\HelpCrudController:delete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController:deleteEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\HelpCrudController:detail' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController:edit' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController:index' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController:new' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController:persistEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\HelpCrudController:renderFilters' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\HelpCrudController:updateEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.9Bk06Bg', 'get_ServiceLocator_9Bk06BgService', false],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.eWjpFVH', 'get_ServiceLocator_EWjpFVHService', false],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator..i55Rhi', 'get_ServiceLocator__I55RhiService', false],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.zS98TBB', 'get_ServiceLocator_ZS98TBBService', false],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.JGYCiBX', 'get_ServiceLocator_JGYCiBXService', false],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.otZczst', 'get_ServiceLocator_OtZczstService', false],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.v.P6Zco', 'get_ServiceLocator_V_P6ZcoService', false],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Admin\\UserCrudController:removeUser' => ['privates', '.service_locator.lEYp0ee', 'get_ServiceLocator_LEYp0eeService', false],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.ebihhh1', 'get_ServiceLocator_Ebihhh1Service', false],
            'App\\Controller\\Admin\\UserCrudController:statistic' => ['privates', '.service_locator.Lq2J.x9', 'get_ServiceLocator_Lq2J_X9Service', false],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator.D6XybyG', 'get_ServiceLocator_D6XybyGService', false],
            'App\\Controller\\Api\\EnabledUser:__invoke' => ['privates', '.service_locator.VqGJT2v', 'get_ServiceLocator_VqGJT2vService', false],
            'App\\Controller\\Api\\EnabledUser' => ['privates', '.service_locator.VqGJT2v', 'get_ServiceLocator_VqGJT2vService', false],
            'App\\Controller\\DefaultController:contact' => ['privates', '.service_locator.SjDU5mj', 'get_ServiceLocator_SjDU5mjService', false],
            'App\\Controller\\Security\\SecurityController:admin' => ['privates', '.service_locator.RjXesPF', 'get_ServiceLocator_RjXesPFService', false],
            'App\\Controller\\Security\\SecurityController:user' => ['privates', '.service_locator.RjXesPF', 'get_ServiceLocator_RjXesPFService', false],
        ], [
            'App\\Controller\\Admin\\CityCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CityCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CityCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CityCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CityCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CityCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CityCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CityCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CityCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CityCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CityCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CityCrudController::delete' => '?',
            'App\\Controller\\Admin\\CityCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CityCrudController::detail' => '?',
            'App\\Controller\\Admin\\CityCrudController::edit' => '?',
            'App\\Controller\\Admin\\CityCrudController::index' => '?',
            'App\\Controller\\Admin\\CityCrudController::new' => '?',
            'App\\Controller\\Admin\\CityCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CityCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CityCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\HelpCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\HelpCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\HelpCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\HelpCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\HelpCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\HelpCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\HelpCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\HelpCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\HelpCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\HelpCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\HelpCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\HelpCrudController::delete' => '?',
            'App\\Controller\\Admin\\HelpCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\HelpCrudController::detail' => '?',
            'App\\Controller\\Admin\\HelpCrudController::edit' => '?',
            'App\\Controller\\Admin\\HelpCrudController::index' => '?',
            'App\\Controller\\Admin\\HelpCrudController::new' => '?',
            'App\\Controller\\Admin\\HelpCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\HelpCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\HelpCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::removeUser' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::statistic' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\Api\\EnabledUser::__invoke' => '?',
            'App\\Controller\\DefaultController::contact' => '?',
            'App\\Controller\\Security\\SecurityController::admin' => '?',
            'App\\Controller\\Security\\SecurityController::user' => '?',
            'App\\Controller\\Admin\\CityCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CityCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CityCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CityCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CityCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CityCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CityCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CityCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CityCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CityCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CityCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CityCrudController:delete' => '?',
            'App\\Controller\\Admin\\CityCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CityCrudController:detail' => '?',
            'App\\Controller\\Admin\\CityCrudController:edit' => '?',
            'App\\Controller\\Admin\\CityCrudController:index' => '?',
            'App\\Controller\\Admin\\CityCrudController:new' => '?',
            'App\\Controller\\Admin\\CityCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CityCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CityCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\HelpCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\HelpCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\HelpCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\HelpCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\HelpCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\HelpCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\HelpCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\HelpCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\HelpCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\HelpCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\HelpCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\HelpCrudController:delete' => '?',
            'App\\Controller\\Admin\\HelpCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\HelpCrudController:detail' => '?',
            'App\\Controller\\Admin\\HelpCrudController:edit' => '?',
            'App\\Controller\\Admin\\HelpCrudController:index' => '?',
            'App\\Controller\\Admin\\HelpCrudController:new' => '?',
            'App\\Controller\\Admin\\HelpCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\HelpCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\HelpCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:removeUser' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:statistic' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\Api\\EnabledUser:__invoke' => '?',
            'App\\Controller\\Api\\EnabledUser' => '?',
            'App\\Controller\\DefaultController:contact' => '?',
            'App\\Controller\\Security\\SecurityController:admin' => '?',
            'App\\Controller\\Security\\SecurityController:user' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.lEYp0ee' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_LEYp0eeService()
    {
        return $this->privates['.service_locator.lEYp0ee'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'userManager' => ['privates', 'App\\Manager\\UserManager', 'getUserManagerService', false],
        ], [
            'userManager' => 'App\\Manager\\UserManager',
        ]);
    }

    /**
     * Gets the private '.service_locator.otZczst' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_OtZczstService()
    {
        return $this->privates['.service_locator.otZczst'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'entityDto' => ['privates', '.errored..service_locator.otZczst.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'fields' => ['privates', '.errored..service_locator.otZczst.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection', NULL, 'Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection" but no such service exists.'],
            'filters' => ['privates', '.errored..service_locator.otZczst.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection', NULL, 'Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection" but no such service exists.'],
            'searchDto' => ['privates', '.errored..service_locator.otZczst.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto', NULL, 'Cannot autowire service ".service_locator.otZczst": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto" but no such service exists.'],
        ], [
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'fields' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection',
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection',
            'searchDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto',
        ]);
    }

    /**
     * Gets the private '.service_locator.pNNo5z3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_PNNo5z3Service()
    {
        return $this->privates['.service_locator.pNNo5z3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'doctrine' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.ua41_HT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_Ua41HTService()
    {
        return $this->privates['.service_locator.ua41_HT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory', 'getActionFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory', 'getEntityFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory', 'getFilterFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory', 'getFormFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory', 'getPaginatorFactoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository', 'getEntityRepositoryService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater', 'getEntityUpdaterService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider', 'getAdminContextProviderService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider', 'getFieldProviderService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator', 'getCrudUrlGeneratorService', false],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'form.factory' => ['services', 'form.factory', 'getForm_FactoryService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'router' => ['services', 'router', 'getRouterService', false],
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'security.csrf.token_manager' => ['services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService', false],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator',
            'doctrine' => '?',
            'event_dispatcher' => '?',
            'form.factory' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
            'request_stack' => '?',
            'router' => '?',
            'security.authorization_checker' => '?',
            'security.csrf.token_manager' => '?',
            'security.token_storage' => '?',
            'serializer' => '?',
            'session' => '?',
            'twig' => '?',
        ]);
    }

    /**
     * Gets the private '.service_locator.v.P6Zco' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_V_P6ZcoService()
    {
        return $this->privates['.service_locator.v.P6Zco'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'context' => ['privates', '.errored..service_locator.v.P6Zco.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.v.P6Zco": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
            'entityDto' => ['privates', '.errored..service_locator.v.P6Zco.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.v.P6Zco": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'formOptions' => ['privates', '.errored..service_locator.v.P6Zco.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore', NULL, 'Cannot autowire service ".service_locator.v.P6Zco": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'formOptions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\KeyValueStore',
        ]);
    }

    /**
     * Gets the private '.service_locator.zABJvAy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ZABJvAyService()
    {
        return $this->privates['.service_locator.zABJvAy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'user' => ['privates', '.errored..service_locator.zABJvAy.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.zABJvAy": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }

    /**
     * Gets the private '.service_locator.zS98TBB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function get_ServiceLocator_ZS98TBBService()
    {
        return $this->privates['.service_locator.zS98TBB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'filters' => ['privates', '.errored..service_locator.zS98TBB.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters', NULL, 'Cannot autowire service ".service_locator.zS98TBB": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters" but no such service exists.'],
        ], [
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Filters',
        ]);
    }

    /**
     * Gets the private 'App\DataCollector\ListUserCollector' shared autowired service.
     *
     * @return \App\DataCollector\ListUserCollector
     */
    protected function getListUserCollectorService()
    {
        return $this->privates['App\\DataCollector\\ListUserCollector'] = new \App\DataCollector\ListUserCollector(($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()), ($this->privates['App\\Repository\\CityRepository'] ?? $this->getCityRepositoryService()));
    }

    /**
     * Gets the private 'App\EventListener\ContactListener' shared autowired service.
     *
     * @return \App\EventListener\ContactListener
     */
    protected function getContactListenerService()
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/ContactListener.php';

        return $this->privates['App\\EventListener\\ContactListener'] = new \App\EventListener\ContactListener();
    }

    /**
     * Gets the private 'App\EventSubscriber\ContactSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\ContactSubscriber
     */
    protected function getContactSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'/src/EventSubscriber/ContactSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/Services/SwiftMailerService.php';

        return $this->privates['App\\EventSubscriber\\ContactSubscriber'] = new \App\EventSubscriber\ContactSubscriber(new \App\Services\SwiftMailerService(($this->services['swiftmailer.mailer.default'] ?? $this->getSwiftmailer_Mailer_DefaultService()), ($this->services['twig'] ?? $this->getTwigService())));
    }

    /**
     * Gets the private 'App\Form\ContactType' shared autowired service.
     *
     * @return \App\Form\ContactType
     */
    protected function getContactTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ContactType.php';

        return $this->privates['App\\Form\\ContactType'] = new \App\Form\ContactType();
    }

    /**
     * Gets the private 'App\Form\Security\LoginType' shared autowired service.
     *
     * @return \App\Form\Security\LoginType
     */
    protected function getLoginTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Security/LoginType.php';

        return $this->privates['App\\Form\\Security\\LoginType'] = new \App\Form\Security\LoginType();
    }

    /**
     * Gets the private 'App\Manager\ContactManager' shared autowired service.
     *
     * @return \App\Manager\ContactManager
     */
    protected function getContactManagerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Manager/ContactManager.php';

        return $this->privates['App\\Manager\\ContactManager'] = new \App\Manager\ContactManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Services\\MessageService'] ?? $this->getMessageServiceService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'App\Manager\UserManager' shared autowired service.
     *
     * @return \App\Manager\UserManager
     */
    protected function getUserManagerService()
    {
        include_once \dirname(__DIR__, 4).'/src/Manager/UserManager.php';

        return $this->privates['App\\Manager\\UserManager'] = new \App\Manager\UserManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Services\\PasswordService'] ?? $this->getPasswordServiceService()), ($this->privates['App\\Repository\\UserRepository'] ?? $this->getUserRepositoryService()));
    }

    /**
     * Gets the private 'App\Repository\AdminRepository' shared autowired service.
     *
     * @return \App\Repository\AdminRepository
     */
    protected function getAdminRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/AdminRepository.php';

        return $this->privates['App\\Repository\\AdminRepository'] = new \App\Repository\AdminRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\CityRepository' shared autowired service.
     *
     * @return \App\Repository\CityRepository
     */
    protected function getCityRepositoryService()
    {
        return $this->privates['App\\Repository\\CityRepository'] = new \App\Repository\CityRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\ContactRepository' shared autowired service.
     *
     * @return \App\Repository\ContactRepository
     */
    protected function getContactRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/ContactRepository.php';

        return $this->privates['App\\Repository\\ContactRepository'] = new \App\Repository\ContactRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\HelpRepository' shared autowired service.
     *
     * @return \App\Repository\HelpRepository
     */
    protected function getHelpRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/HelpRepository.php';

        return $this->privates['App\\Repository\\HelpRepository'] = new \App\Repository\HelpRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Repository\UserRepository
     */
    protected function getUserRepositoryService()
    {
        return $this->privates['App\\Repository\\UserRepository'] = new \App\Repository\UserRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'App\Security\Guard\AdminLoginAuthenticator' shared autowired service.
     *
     * @return \App\Security\Guard\AdminLoginAuthenticator
     */
    protected function getAdminLoginAuthenticatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/src/Security/Guard/AdminLoginAuthenticator.php';

        return $this->privates['App\\Security\\Guard\\AdminLoginAuthenticator'] = new \App\Security\Guard\AdminLoginAuthenticator(($this->privates['App\\Services\\PasswordService'] ?? $this->getPasswordServiceService()), ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'App\Services\MessageService' shared autowired service.
     *
     * @return \App\Services\MessageService
     */
    protected function getMessageServiceService()
    {
        include_once \dirname(__DIR__, 4).'/src/Services/MessageService.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Flash/FlashBag.php';

        return $this->privates['App\\Services\\MessageService'] = new \App\Services\MessageService(($this->services['session'] ?? $this->getSessionService())->getFlashBag());
    }

    /**
     * Gets the private 'App\Services\PasswordService' shared autowired service.
     *
     * @return \App\Services\PasswordService
     */
    protected function getPasswordServiceService()
    {
        include_once \dirname(__DIR__, 4).'/src/Services/PasswordService.php';

        return $this->privates['App\\Services\\PasswordService'] = new \App\Services\PasswordService(($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer
     */
    protected function getCacheWarmer2Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Cache/CacheWarmer.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Cache\\CacheWarmer'] = new \EasyCorp\Bundle\EasyAdminBundle\Cache\CacheWarmer(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\AdminContextListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\AdminContextListener
     */
    protected function getAdminContextListenerService()
    {
        $a = ($this->services['translator'] ?? $this->getTranslatorService());
        $b = ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($this->getEnv('APP_SECRET'), $this->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController'])));
        $c = ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry($this->getEnv('APP_SECRET'), [0 => 'App\\Controller\\Admin\\CityCrudController', 1 => 'App\\Controller\\Admin\\HelpCrudController', 2 => 'App\\Controller\\Admin\\UserCrudController'])));

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\AdminContextListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\AdminContextListener(new \EasyCorp\Bundle\EasyAdminBundle\Factory\AdminContextFactory($this->targetDir.'', $a, ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), new \EasyCorp\Bundle\EasyAdminBundle\Factory\MenuFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), $b, ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService()), $a, ($this->services['router'] ?? $this->getRouterService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $this->getCrudUrlGeneratorService())), $c, ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService())), $b, $c, ($this->privates['debug.controller_resolver'] ?? $this->getDebug_ControllerResolverService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener
     */
    protected function getCrudResponseListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/EventListener/CrudResponseListener.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener
     */
    protected function getExceptionListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/EventListener/ExceptionListener.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener(true, ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\ActionFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\ActionFactory
     */
    protected function getActionFactoryService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\ActionFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($this->getEnv('APP_SECRET'), $this->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController']))), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService()), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $this->getCrudUrlGeneratorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\EntityFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\EntityFactory
     */
    protected function getEntityFactoryService()
    {
        $a = ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService());

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\EntityFactory(new \EasyCorp\Bundle\EasyAdminBundle\Factory\FieldFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), $a, new RewindableGenerator(function () {
            yield 0 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'] ?? $this->getCommonPreConfiguratorService());
            yield 1 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ArrayConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ArrayConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ArrayConfigurator()));
            yield 2 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AssociationConfigurator'] ?? $this->getAssociationConfiguratorService());
            yield 3 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AvatarConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AvatarConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AvatarConfigurator()));
            yield 4 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\BooleanConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\BooleanConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\BooleanConfigurator()));
            yield 5 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CodeEditorConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CodeEditorConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CodeEditorConfigurator()));
            yield 6 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CollectionConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CollectionConfigurator()));
            yield 7 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CountryConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CountryConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CountryConfigurator()));
            yield 8 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CurrencyConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CurrencyConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CurrencyConfigurator()));
            yield 9 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\DateTimeConfigurator'] ?? $this->getDateTimeConfiguratorService());
            yield 10 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\EmailConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\EmailConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\EmailConfigurator()));
            yield 11 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\FormConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\FormConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\FormConfigurator()));
            yield 12 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\IdConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\IdConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\IdConfigurator()));
            yield 13 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ImageConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ImageConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ImageConfigurator()));
            yield 14 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LanguageConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LanguageConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LanguageConfigurator()));
            yield 15 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LocaleConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\LocaleConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\LocaleConfigurator()));
            yield 16 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\MoneyConfigurator'] ?? $this->getMoneyConfiguratorService());
            yield 17 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\NumberConfigurator'] ?? $this->getNumberConfiguratorService());
            yield 18 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\PercentConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\PercentConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\PercentConfigurator()));
            yield 19 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ChoiceConfigurator'] ?? $this->getChoiceConfiguratorService());
            yield 20 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\SlugConfigurator'] ?? $this->getSlugConfiguratorService());
            yield 21 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TelephoneConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TelephoneConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TelephoneConfigurator()));
            yield 22 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TextConfigurator()));
            yield 23 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextEditorConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TextEditorConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TextEditorConfigurator()));
            yield 24 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TimezoneConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\TimezoneConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\TimezoneConfigurator()));
            yield 25 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\UrlConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\UrlConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\UrlConfigurator()));
            yield 26 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPostConfigurator'] ?? $this->getCommonPostConfiguratorService());
        }, 27)), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\ActionFactory'] ?? $this->getActionFactoryService()), $a, ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory
     */
    protected function getFilterFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/FilterFactory.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FilterFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\FilterFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\CommonConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\CommonConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\CommonConfigurator()));
            yield 1 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ChoiceConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ChoiceConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ChoiceConfigurator()));
            yield 2 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ComparisonConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\ComparisonConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\ComparisonConfigurator()));
            yield 3 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\DateTimeConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\DateTimeConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\DateTimeConfigurator()));
            yield 4 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\EntityConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\EntityConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\EntityConfigurator()));
            yield 5 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NumericConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\NumericConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\NumericConfigurator()));
            yield 6 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\TextConfigurator'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Filter\\Configurator\\TextConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Filter\Configurator\TextConfigurator()));
        }, 7));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory
     */
    protected function getFormFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/FormFactory.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory(($this->services['form.factory'] ?? $this->getForm_FactoryService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $this->getCrudUrlGeneratorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory
     */
    protected function getPaginatorFactoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/PaginatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Orm/EntityPaginatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Orm/EntityPaginator.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityPaginator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $this->getCrudUrlGeneratorService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService())));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator
     */
    protected function getAssociationConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/AssociationConfigurator.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AssociationConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $this->getCrudUrlGeneratorService()), ($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator
     */
    protected function getChoiceConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\ChoiceConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\ChoiceConfigurator(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator
     */
    protected function getCommonPostConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CommonPostConfigurator.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPostConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPostConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator
     */
    protected function getCommonPreConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CommonPreConfigurator.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\CommonPreConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\CommonPreConfigurator(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\DateTimeConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\DateTimeConfigurator
     */
    protected function getDateTimeConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/DateTimeConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Intl/IntlFormatter.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\DateTimeConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\DateTimeConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator
     */
    protected function getMoneyConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/MoneyConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Intl/IntlFormatter.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\MoneyConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\MoneyConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator
     */
    protected function getNumberConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/NumberConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Intl/IntlFormatter.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\NumberConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\NumberConfigurator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Intl\\IntlFormatter'] = new \EasyCorp\Bundle\EasyAdminBundle\Intl\IntlFormatter())));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator
     */
    protected function getSlugConfiguratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\SlugConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\SlugConfigurator(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension
     */
    protected function getEaCrudFormTypeExtensionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Form/Extension/EaCrudFormTypeExtension.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EaCrudFormTypeExtension(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType
     */
    protected function getCrudFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Form/Type/CrudFormType.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType(($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType
     */
    protected function getFiltersFormTypeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Form/Type/FiltersFormType.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\FiltersFormType();
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository
     */
    protected function getEntityRepositoryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Orm/EntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Orm/EntityRepository.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityRepository'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $this->getEntityFactoryService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] ?? $this->getFormFactoryService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater
     */
    protected function getEntityUpdaterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Orm/EntityUpdaterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Orm/EntityUpdater.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Orm\\EntityUpdater'] = new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityUpdater(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider
     */
    protected function getAdminContextProviderService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] = new \EasyCorp\Bundle\EasyAdminBundle\Provider\AdminContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider
     */
    protected function getFieldProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Provider/FieldProvider.php';

        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\FieldProvider'] = new \EasyCorp\Bundle\EasyAdminBundle\Provider\FieldProvider(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator
     */
    protected function getCrudUrlGeneratorService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\DashboardControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\DashboardControllerRegistry($this->getEnv('APP_SECRET'), $this->targetDir.'', [0 => 'App\\Controller\\Admin\\DashboardController']))), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Registry\\CrudControllerRegistry'] = new \EasyCorp\Bundle\EasyAdminBundle\Registry\CrudControllerRegistry($this->getEnv('APP_SECRET'), [0 => 'App\\Controller\\Admin\\CityCrudController', 1 => 'App\\Controller\\Admin\\HelpCrudController', 2 => 'App\\Controller\\Admin\\UserCrudController']))));
    }

    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker
     */
    protected function getAuthorizationCheckerService()
    {
        return $this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] = new \EasyCorp\Bundle\EasyAdminBundle\Security\AuthorizationChecker(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'Translation\Extractor\Extractor' shared service.
     *
     * @return \Translation\Extractor\Extractor
     */
    protected function getExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Extractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/FileExtractor/FileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/FileExtractor/PHPFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Visitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/BaseVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/BasePHPVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/nikic/php-parser/lib/PhpParser/NodeVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/ContainerAwareTrans.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/ContainerAwareTransChoice.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FlashMessage.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/AbstractFormType.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypeChoices.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypeEmptyValue.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypeHelp.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypeInvalidMessage.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypeLabelExplicit.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypeLabelImplicit.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypePlaceholder.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/FormTypeTitle.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/Symfony/ValidationAnnotation.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Php/SourceLocationContainerVisitor.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/FileExtractor/TwigFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/NodeVisitor/NodeVisitorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/extractor/src/Visitor/Twig/TwigVisitor.php';

        $this->privates['Translation\\Extractor\\Extractor'] = $instance = new \Translation\Extractor\Extractor();

        $a = new \Translation\Extractor\FileExtractor\PHPFileExtractor();

        $b = new \Translation\Extractor\Visitor\Php\Symfony\FormTypeChoices();
        $b->setSymfonyMajorVersion(5);

        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\ContainerAwareTrans());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\ContainerAwareTransChoice());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FlashMessage());
        $a->addVisitor($b);
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FormTypeEmptyValue());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FormTypeHelp());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FormTypeInvalidMessage());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FormTypeLabelExplicit());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FormTypeLabelImplicit());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FormTypePlaceholder());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\FormTypeTitle());
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\Symfony\ValidationAnnotation(($this->services['validator'] ?? $this->getValidatorService())));
        $a->addVisitor(new \Translation\Extractor\Visitor\Php\SourceLocationContainerVisitor());
        $c = new \Translation\Extractor\FileExtractor\TwigFileExtractor(($this->services['twig'] ?? $this->getTwigService()));
        $c->addVisitor(new \Translation\Extractor\Visitor\Twig\TwigVisitor());

        $instance->addFileExtractor($a);
        $instance->addFileExtractor($c);

        return $instance;
    }

    /**
     * Gets the private 'Vich\UploaderBundle\Metadata\CacheWarmer' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\CacheWarmer
     */
    protected function getCacheWarmer3Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Metadata/CacheWarmer.php';

        return $this->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] = new \Vich\UploaderBundle\Metadata\CacheWarmer(($this->targetDir.''.'/vich_uploader'), ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));
    }

    /**
     * Gets the private 'Vich\UploaderBundle\Util\Transliterator' shared service.
     *
     * @return \Vich\UploaderBundle\Util\Transliterator
     */
    protected function getTransliteratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Util/Transliterator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/SluggerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/string/Slugger/AsciiSlugger.php';

        return $this->privates['Vich\\UploaderBundle\\Util\\Transliterator'] = new \Vich\UploaderBundle\Util\Transliterator(($this->privates['slugger'] ?? ($this->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('fr'))));
    }

    /**
     * Gets the private 'acme_api.event.authentication_success_listener' shared autowired service.
     *
     * @return \App\EventListener\JWTCreatedListener
     */
    protected function getAcmeApi_Event_AuthenticationSuccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/JWTCreatedListener.php';

        return $this->privates['acme_api.event.authentication_success_listener'] = new \App\EventListener\JWTCreatedListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'annotations.cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getAnnotations_CacheService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ProxyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/PhpArrayAdapter.php';

        return new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDir.''.'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService())));
    }

    /**
     * Gets the private 'annotations.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
     */
    protected function getAnnotations_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php';

        return $this->privates['annotations.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), ($this->targetDir.''.'/annotations.php'), '#^Symfony\\\\(?:Component\\\\HttpKernel\\\\|Bundle\\\\FrameworkBundle\\\\Controller\\\\(?!.*Controller$))#', true);
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->getAnnotations_CacheService(), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'api_platform.cache.identifiers_extractor' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_IdentifiersExtractorService()
    {
        return $this->privates['api_platform.cache.identifiers_extractor'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('mWSPmGBg2u', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.property' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_PropertyService()
    {
        return $this->privates['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('CI7oA+ekyS', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.metadata.resource' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_Metadata_ResourceService()
    {
        return $this->privates['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FaV5JESl7m', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.route_name_resolver' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_RouteNameResolverService()
    {
        return $this->privates['api_platform.cache.route_name_resolver'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('DOxjqucPCC', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache.subresource_operation_factory' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getApiPlatform_Cache_SubresourceOperationFactoryService()
    {
        return $this->privates['api_platform.cache.subresource_operation_factory'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('hEyZUjsqcN', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'api_platform.cache_warmer.cache_pool_clearer' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\CacheWarmer\CachePoolClearerCacheWarmer
     */
    protected function getApiPlatform_CacheWarmer_CachePoolClearerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/CacheWarmer/CachePoolClearerCacheWarmer.php';

        return $this->privates['api_platform.cache_warmer.cache_pool_clearer'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\CacheWarmer\CachePoolClearerCacheWarmer(($this->services['cache.system_clearer'] ?? $this->getCache_SystemClearerService()), [0 => 'api_platform.cache.metadata.property', 1 => 'api_platform.cache.metadata.resource', 2 => 'api_platform.cache.route_name_resolver', 3 => 'api_platform.cache.identifiers_extractor', 4 => 'api_platform.cache.subresource_operation_factory', 5 => 'api_platform.elasticsearch.cache.metadata.document']);
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister
     */
    protected function getApiPlatform_Doctrine_Orm_DataPersisterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/DataPersister.php';

        return $this->privates['api_platform.doctrine.orm.data_persister'] = new \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.default.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider
     */
    protected function getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/CollectionDataProvider.php';

        return $this->privates['api_platform.doctrine.orm.default.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
            yield 1 => ($this->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterService());
            yield 2 => ($this->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService());
            yield 3 => ($this->privates['api_platform.doctrine.orm.query_extension.order'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_OrderService());
            yield 4 => ($this->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService());
        }, 5));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.default.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider
     */
    protected function getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/DenormalizedIdentifiersAwareItemDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Util/IdentifierManagerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/ItemDataProvider.php';

        return $this->privates['api_platform.doctrine.orm.default.item_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
        }, 1));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.default.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider
     */
    protected function getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Util/IdentifierManagerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/SubresourceDataProvider.php';

        return $this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
            yield 1 => ($this->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterService());
            yield 2 => ($this->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService());
            yield 3 => ($this->privates['api_platform.doctrine.orm.query_extension.order'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_OrderService());
            yield 4 => ($this->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService());
        }, 5), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService());
        }, 1));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.eager_loading' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Util/EagerLoadingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/EagerLoadingExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), 30, true, NULL, NULL, false, ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.filter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_FilterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/FilterExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.filter_eager_loading' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Util/EagerLoadingTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/FilterEagerLoadingExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), true, ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.order' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_OrderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/OrderExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.order'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension('ASC', ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.pagination' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension
     */
    protected function getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryResultCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/ContextAwareQueryResultCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/PaginationExtension.php';

        return $this->privates['api_platform.doctrine.orm.query_extension.pagination'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.pagination'] ?? $this->getApiPlatform_PaginationService()));
    }

    /**
     * Gets the private 'api_platform.graphql.command.export_command' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\GraphQlExportCommand
     */
    protected function getApiPlatform_Graphql_Command_ExportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Command/GraphQlExportCommand.php';

        $this->privates['api_platform.graphql.command.export_command'] = $instance = new \ApiPlatform\Core\Bridge\Symfony\Bundle\Command\GraphQlExportCommand(($this->privates['api_platform.graphql.schema_builder'] ?? $this->getApiPlatform_Graphql_SchemaBuilderService()));

        $instance->setName('api:graphql:export');

        return $instance;
    }

    /**
     * Gets the private 'api_platform.graphql.fields_builder' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\FieldsBuilder
     */
    protected function getApiPlatform_Graphql_FieldsBuilderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/FieldsBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/FieldsBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/ResourceFieldResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeConverterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypeConverter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/ResolverFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/ItemResolverFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/ReadStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/ReadStage.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Serializer/SerializerContextBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Serializer/SerializerContextBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SecurityStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SecurityStage.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SecurityPostDenormalizeStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SecurityPostDenormalizeStage.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SerializeStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/SerializeStage.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/CollectionResolverFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Factory/ItemMutationResolverFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/DeserializeStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/DeserializeStage.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/WriteStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/WriteStage.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/ValidateStageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Resolver/Stage/ValidateStage.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainer.php';

        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());
        $b = ($this->privates['api_platform.graphql.types_container'] ?? ($this->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer()));
        $c = ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService());

        $d = new \ApiPlatform\Core\GraphQl\Type\TypeBuilder($b, new \ApiPlatform\Core\GraphQl\Resolver\ResourceFieldResolver($c), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'api_platform.graphql.fields_builder' => ['privates', 'api_platform.graphql.fields_builder', 'getApiPlatform_Graphql_FieldsBuilderService', false],
        ], [
            'api_platform.graphql.fields_builder' => '?',
        ]));
        $e = ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService());

        $f = new \ApiPlatform\Core\GraphQl\Serializer\SerializerContextBuilder($a, $e);

        $g = new \ApiPlatform\Core\GraphQl\Resolver\Stage\ReadStage($a, $c, ($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), $f, '_');
        $h = ($this->privates['api_platform.security.resource_access_checker'] ?? $this->getApiPlatform_Security_ResourceAccessCheckerService());

        $i = new \ApiPlatform\Core\GraphQl\Resolver\Stage\SecurityStage($a, $h);
        $j = new \ApiPlatform\Core\GraphQl\Resolver\Stage\SecurityPostDenormalizeStage($a, $h);
        $k = ($this->services['serializer'] ?? $this->getSerializerService());
        $l = ($this->privates['api_platform.pagination'] ?? $this->getApiPlatform_PaginationService());

        $m = new \ApiPlatform\Core\GraphQl\Resolver\Stage\SerializeStage($a, $k, $f, $l);
        $n = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []);

        return $this->privates['api_platform.graphql.fields_builder'] = new \ApiPlatform\Core\GraphQl\Type\FieldsBuilder(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b, $d, new \ApiPlatform\Core\GraphQl\Type\TypeConverter($d, $b, $a), new \ApiPlatform\Core\GraphQl\Resolver\Factory\ItemResolverFactory($g, $i, $j, $m, $n, $a), new \ApiPlatform\Core\GraphQl\Resolver\Factory\CollectionResolverFactory($g, $i, $j, $m, $n, $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), new \ApiPlatform\Core\GraphQl\Resolver\Factory\ItemMutationResolverFactory($g, $i, $j, $m, new \ApiPlatform\Core\GraphQl\Resolver\Stage\DeserializeStage($a, $k, $f), new \ApiPlatform\Core\GraphQl\Resolver\Stage\WriteStage($a, ($this->privates['debug.api_platform.data_persister'] ?? $this->getDebug_ApiPlatform_DataPersisterService()), $f), new \ApiPlatform\Core\GraphQl\Resolver\Stage\ValidateStage($a, ($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []), $a), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), $l, $e, '_');
    }

    /**
     * Gets the private 'api_platform.graphql.iterable_type' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\Definition\IterableType
     */
    protected function getApiPlatform_Graphql_IterableTypeService()
    {
        return $this->privates['api_platform.graphql.iterable_type'] = new \ApiPlatform\Core\GraphQl\Type\Definition\IterableType();
    }

    /**
     * Gets the private 'api_platform.graphql.schema_builder' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\SchemaBuilder
     */
    protected function getApiPlatform_Graphql_SchemaBuilderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/SchemaBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/GraphQl/Type/TypesContainer.php';

        return $this->privates['api_platform.graphql.schema_builder'] = new \ApiPlatform\Core\GraphQl\Type\SchemaBuilder(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), new \ApiPlatform\Core\GraphQl\Type\TypesFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'api_platform.graphql.iterable_type' => ['privates', 'api_platform.graphql.iterable_type', 'getApiPlatform_Graphql_IterableTypeService', false],
            'api_platform.graphql.upload_type' => ['privates', 'api_platform.graphql.upload_type', 'getApiPlatform_Graphql_UploadTypeService', false],
        ], [
            'api_platform.graphql.iterable_type' => '?',
            'api_platform.graphql.upload_type' => '?',
        ]), [0 => 'api_platform.graphql.iterable_type', 1 => 'api_platform.graphql.upload_type']), ($this->privates['api_platform.graphql.types_container'] ?? ($this->privates['api_platform.graphql.types_container'] = new \ApiPlatform\Core\GraphQl\Type\TypesContainer())), ($this->privates['api_platform.graphql.fields_builder'] ?? $this->getApiPlatform_Graphql_FieldsBuilderService()));
    }

    /**
     * Gets the private 'api_platform.graphql.upload_type' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Type\Definition\UploadType
     */
    protected function getApiPlatform_Graphql_UploadTypeService()
    {
        return $this->privates['api_platform.graphql.upload_type'] = new \ApiPlatform\Core\GraphQl\Type\Definition\UploadType();
    }

    /**
     * Gets the private 'api_platform.http_cache.listener.response.configure' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener
     */
    protected function getApiPlatform_HttpCache_Listener_Response_ConfigureService()
    {
        return $this->privates['api_platform.http_cache.listener.response.configure'] = new \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener(true, NULL, NULL, $this->parameters['api_platform.http_cache.vary'], NULL, ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.hydra.json_schema.schema_factory' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory
     */
    protected function getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()
    {
        $a = ($this->privates['api_platform.json_schema.type_factory'] ?? $this->getApiPlatform_JsonSchema_TypeFactoryService());

        if (isset($this->privates['api_platform.hydra.json_schema.schema_factory'])) {
            return $this->privates['api_platform.hydra.json_schema.schema_factory'];
        }

        return $this->privates['api_platform.hydra.json_schema.schema_factory'] = new \ApiPlatform\Core\Hydra\JsonSchema\SchemaFactory(new \ApiPlatform\Core\JsonSchema\SchemaFactory($a, ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['serializer.name_converter.metadata_aware'] ?? $this->getSerializer_NameConverter_MetadataAwareService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService())));
    }

    /**
     * Gets the private 'api_platform.hydra.listener.response.add_link_header' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener
     */
    protected function getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService()
    {
        return $this->privates['api_platform.hydra.listener.response.add_link_header'] = new \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener(($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.identifier.converter' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\IdentifierConverter
     */
    protected function getApiPlatform_Identifier_ConverterService()
    {
        return $this->privates['api_platform.identifier.converter'] = new \ApiPlatform\Core\Identifier\IdentifierConverter(($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.identifier.integer'] ?? ($this->privates['api_platform.identifier.integer'] = new \ApiPlatform\Core\Identifier\Normalizer\IntegerDenormalizer()));
            yield 1 => ($this->privates['api_platform.identifier.date_normalizer'] ?? ($this->privates['api_platform.identifier.date_normalizer'] = new \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer()));
        }, 2));
    }

    /**
     * Gets the private 'api_platform.identifiers_extractor.cached' shared service.
     *
     * @return \ApiPlatform\Core\Api\CachedIdentifiersExtractor
     */
    protected function getApiPlatform_IdentifiersExtractor_CachedService()
    {
        $a = ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService());
        $b = ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService());

        return $this->privates['api_platform.identifiers_extractor.cached'] = new \ApiPlatform\Core\Api\CachedIdentifiersExtractor(($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService()), new \ApiPlatform\Core\Api\IdentifiersExtractor(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), $a, $b), $a, $b);
    }

    /**
     * Gets the private 'api_platform.iri_converter' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     */
    protected function getApiPlatform_IriConverterService()
    {
        $a = ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService());

        return $this->privates['api_platform.iri_converter'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter(($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService()), new \ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver($a)), $a, ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()), ($this->privates['api_platform.identifiers_extractor.cached'] ?? $this->getApiPlatform_IdentifiersExtractor_CachedService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));
    }

    /**
     * Gets the private 'api_platform.json_schema.type_factory' shared service.
     *
     * @return \ApiPlatform\Core\JsonSchema\TypeFactory
     */
    protected function getApiPlatform_JsonSchema_TypeFactoryService()
    {
        $this->privates['api_platform.json_schema.type_factory'] = $instance = new \ApiPlatform\Core\JsonSchema\TypeFactory(($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));

        $instance->setSchemaFactory(($this->privates['api_platform.hydra.json_schema.schema_factory'] ?? $this->getApiPlatform_Hydra_JsonSchema_SchemaFactoryService()));

        return $instance;
    }

    /**
     * Gets the private 'api_platform.jsonld.context_builder' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\ContextBuilder
     */
    protected function getApiPlatform_Jsonld_ContextBuilderService()
    {
        return $this->privates['api_platform.jsonld.context_builder'] = new \ApiPlatform\Core\JsonLd\ContextBuilder(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.router'] ?? $this->getApiPlatform_RouterService()));
    }

    /**
     * Gets the private 'api_platform.listener.exception' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ExceptionListener
     */
    protected function getApiPlatform_Listener_ExceptionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/ExceptionListener.php';

        return $this->privates['api_platform.listener.exception'] = new \ApiPlatform\Core\EventListener\ExceptionListener('api_platform.action.exception', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), false, ($this->privates['exception_listener'] ?? $this->getExceptionListener2Service()));
    }

    /**
     * Gets the private 'api_platform.listener.exception.validation' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener
     */
    protected function getApiPlatform_Listener_Exception_ValidationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/EventListener/ValidationExceptionListener.php';

        return $this->privates['api_platform.listener.exception.validation'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener(($this->services['serializer'] ?? $this->getSerializerService()), $this->parameters['api_platform.error_formats']);
    }

    /**
     * Gets the private 'api_platform.listener.request.add_format' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\AddFormatListener
     */
    protected function getApiPlatform_Listener_Request_AddFormatService()
    {
        return $this->privates['api_platform.listener.request.add_format'] = new \ApiPlatform\Core\EventListener\AddFormatListener(new \Negotiation\Negotiator(), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the private 'api_platform.listener.request.deserialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\DeserializeListener
     */
    protected function getApiPlatform_Listener_Request_DeserializeService()
    {
        return $this->privates['api_platform.listener.request.deserialize'] = new \ApiPlatform\Core\EventListener\DeserializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.request.read' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ReadListener
     */
    protected function getApiPlatform_Listener_Request_ReadService()
    {
        return $this->privates['api_platform.listener.request.read'] = new \ApiPlatform\Core\EventListener\ReadListener(($this->privates['debug.api_platform.collection_data_provider'] ?? $this->getDebug_ApiPlatform_CollectionDataProviderService()), ($this->privates['debug.api_platform.item_data_provider'] ?? $this->getDebug_ApiPlatform_ItemDataProviderService()), ($this->privates['debug.api_platform.subresource_data_provider'] ?? $this->getDebug_ApiPlatform_SubresourceDataProviderService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.identifier.converter'] ?? $this->getApiPlatform_Identifier_ConverterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.respond' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\RespondListener
     */
    protected function getApiPlatform_Listener_View_RespondService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/RespondListener.php';

        return $this->privates['api_platform.listener.view.respond'] = new \ApiPlatform\Core\EventListener\RespondListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.serialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\SerializeListener
     */
    protected function getApiPlatform_Listener_View_SerializeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/SerializeListener.php';

        return $this->privates['api_platform.listener.view.serialize'] = new \ApiPlatform\Core\EventListener\SerializeListener(($this->services['serializer'] ?? $this->getSerializerService()), ($this->privates['api_platform.serializer.context_builder.filter'] ?? $this->getApiPlatform_Serializer_ContextBuilder_FilterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.validate' shared service.
     *
     * @return \ApiPlatform\Core\Validator\EventListener\ValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/EventListener/ValidateListener.php';

        return $this->privates['api_platform.listener.view.validate'] = new \ApiPlatform\Core\Validator\EventListener\ValidateListener(($this->privates['api_platform.validator'] ?? $this->getApiPlatform_ValidatorService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.listener.view.validate_query_parameters' shared service.
     *
     * @return \ApiPlatform\Core\Filter\QueryParameterValidateListener
     */
    protected function getApiPlatform_Listener_View_ValidateQueryParametersService()
    {
        return $this->privates['api_platform.listener.view.validate_query_parameters'] = new \ApiPlatform\Core\Filter\QueryParameterValidateListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))));
    }

    /**
     * Gets the private 'api_platform.listener.view.write' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\WriteListener
     */
    protected function getApiPlatform_Listener_View_WriteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/EventListener/WriteListener.php';

        return $this->privates['api_platform.listener.view.write'] = new \ApiPlatform\Core\EventListener\WriteListener(($this->privates['debug.api_platform.data_persister'] ?? $this->getDebug_ApiPlatform_DataPersisterService()), ($this->privates['api_platform.iri_converter'] ?? $this->getApiPlatform_IriConverterService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService()));
    }

    /**
     * Gets the private 'api_platform.metadata.property.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory
     */
    protected function getApiPlatform_Metadata_Property_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.property.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory(($this->services['validator'] ?? $this->getValidatorService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()), new \ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory(($this->services['doctrine'] ?? $this->getDoctrineService()), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this))))))), ($this->privates['api_platform.resource_class_resolver'] ?? $this->getApiPlatform_ResourceClassResolverService())))))));
    }

    /**
     * Gets the private 'api_platform.metadata.property.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.property.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory(($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService()), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory(($this->privates['property_info'] ?? $this->getPropertyInfoService()))))));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.metadata_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory
     */
    protected function getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()
    {
        $a = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

        return $this->privates['api_platform.metadata.resource.metadata_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\FormatsResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceFilterMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\PhpDocResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\InputOutputResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))))))), $this->parameters['api_platform.patch_formats']), $this->parameters['api_platform.formats'], $this->parameters['api_platform.patch_formats']));
    }

    /**
     * Gets the private 'api_platform.metadata.resource.name_collection_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()
    {
        return $this->privates['api_platform.metadata.resource.name_collection_factory.cached'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory(($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService()), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.yaml'] ?? ($this->privates['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor([], $this))), new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), $this->parameters['api_platform.resource_class_directories'], new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(($this->privates['api_platform.metadata.extractor.xml'] ?? ($this->privates['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor([], $this)))))));
    }

    /**
     * Gets the private 'api_platform.operation_path_resolver.custom' shared service.
     *
     * @return \ApiPlatform\Core\PathResolver\CustomOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_CustomService()
    {
        return $this->privates['api_platform.operation_path_resolver.custom'] = new \ApiPlatform\Core\PathResolver\CustomOperationPathResolver(new \ApiPlatform\Core\PathResolver\OperationPathResolver(($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'api_platform.pagination' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\Pagination
     */
    protected function getApiPlatform_PaginationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataProvider/Pagination.php';

        return $this->privates['api_platform.pagination'] = new \ApiPlatform\Core\DataProvider\Pagination(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), $this->parameters['api_platform.collection.pagination'], $this->parameters['api_platform.graphql.collection.pagination']);
    }

    /**
     * Gets the private 'api_platform.resource_class_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Api\ResourceClassResolver
     */
    protected function getApiPlatform_ResourceClassResolverService()
    {
        return $this->privates['api_platform.resource_class_resolver'] = new \ApiPlatform\Core\Api\ResourceClassResolver(($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()));
    }

    /**
     * Gets the private 'api_platform.router' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\Router
     */
    protected function getApiPlatform_RouterService()
    {
        return $this->privates['api_platform.router'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\Router(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'api_platform.security.listener.request.deny_access' shared service.
     *
     * @return \ApiPlatform\Core\Security\EventListener\DenyAccessListener
     */
    protected function getApiPlatform_Security_Listener_Request_DenyAccessService()
    {
        return $this->privates['api_platform.security.listener.request.deny_access'] = new \ApiPlatform\Core\Security\EventListener\DenyAccessListener(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.security.resource_access_checker'] ?? $this->getApiPlatform_Security_ResourceAccessCheckerService()));
    }

    /**
     * Gets the private 'api_platform.security.resource_access_checker' shared service.
     *
     * @return \ApiPlatform\Core\Security\ResourceAccessChecker
     */
    protected function getApiPlatform_Security_ResourceAccessCheckerService()
    {
        return $this->privates['api_platform.security.resource_access_checker'] = new \ApiPlatform\Core\Security\ResourceAccessChecker(($this->privates['security.expression_language'] ?? $this->getSecurity_ExpressionLanguageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'api_platform.serializer.context_builder.filter' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder
     */
    protected function getApiPlatform_Serializer_ContextBuilder_FilterService()
    {
        $a = ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService());

        return $this->privates['api_platform.serializer.context_builder.filter'] = new \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder($a, ($this->privates['api_platform.filter_locator'] ?? ($this->privates['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))), new \ApiPlatform\Core\Serializer\SerializerContextBuilder($a));
    }

    /**
     * Gets the private 'api_platform.subresource_operation_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory
     */
    protected function getApiPlatform_SubresourceOperationFactory_CachedService()
    {
        return $this->privates['api_platform.subresource_operation_factory.cached'] = new \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory(($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService()), new \ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory(($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.property.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Property_MetadataFactory_CachedService()), ($this->privates['api_platform.path_segment_name_generator.underscore'] ?? ($this->privates['api_platform.path_segment_name_generator.underscore'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()))));
    }

    /**
     * Gets the private 'api_platform.validator' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\Validator
     */
    protected function getApiPlatform_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Validator/ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Validator.php';

        return $this->privates['api_platform.validator'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\Validator(($this->services['validator'] ?? $this->getValidatorService()), $this);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Edp4P5XMlz', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('8ethk9CZGL', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('iRt9SNqziY', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FUy9eNbKSz', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('hFL-wybFrZ', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'console.command.about' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AboutCommand
     */
    protected function getConsole_Command_AboutService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AboutCommand.php';

        $this->privates['console.command.about'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AboutCommand();

        $instance->setName('about');

        return $instance;
    }

    /**
     * Gets the private 'console.command.assets_install' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
     */
    protected function getConsole_Command_AssetsInstallService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AssetsInstallCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.assets_install'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), \dirname(__DIR__, 4));

        $instance->setName('assets:install');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
     */
    protected function getConsole_Command_CacheClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheClearCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $this->privates['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(($this->services['cache_clearer'] ?? $this->getCacheClearer2Service()), ($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())));

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_clear' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
     */
    protected function getConsole_Command_CachePoolClearService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolClearCommand.php';

        $this->privates['console.command.cache_pool_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:clear');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_delete' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand
     */
    protected function getConsole_Command_CachePoolDeleteService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolDeleteCommand.php';

        $this->privates['console.command.cache_pool_delete'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand(($this->services['cache.global_clearer'] ?? $this->getCache_GlobalClearerService()));

        $instance->setName('cache:pool:delete');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    protected function getConsole_Command_CachePoolListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $this->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.doctrine.orm.default.metadata', 7 => 'cache.doctrine.orm.default.result', 8 => 'cache.doctrine.orm.default.query', 9 => 'cache.security_expression_language', 10 => 'api_platform.cache.route_name_resolver', 11 => 'api_platform.cache.identifiers_extractor', 12 => 'api_platform.cache.subresource_operation_factory', 13 => 'api_platform.cache.metadata.resource', 14 => 'api_platform.cache.metadata.property']);

        $instance->setName('cache:pool:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_pool_prune' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
     */
    protected function getConsole_Command_CachePoolPruneService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolPruneCommand.php';

        $this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
            yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
            yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
            yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
            yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
            yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
            yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
            yield 'cache.doctrine.orm.default.metadata' => ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService());
            yield 'cache.doctrine.orm.default.result' => ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService());
            yield 'cache.doctrine.orm.default.query' => ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService());
            yield 'cache.security_expression_language' => ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService());
            yield 'api_platform.cache.route_name_resolver' => ($this->privates['api_platform.cache.route_name_resolver'] ?? $this->getApiPlatform_Cache_RouteNameResolverService());
            yield 'api_platform.cache.identifiers_extractor' => ($this->privates['api_platform.cache.identifiers_extractor'] ?? $this->getApiPlatform_Cache_IdentifiersExtractorService());
            yield 'api_platform.cache.subresource_operation_factory' => ($this->privates['api_platform.cache.subresource_operation_factory'] ?? $this->getApiPlatform_Cache_SubresourceOperationFactoryService());
            yield 'api_platform.cache.metadata.resource' => ($this->privates['api_platform.cache.metadata.resource'] ?? $this->getApiPlatform_Cache_Metadata_ResourceService());
            yield 'api_platform.cache.metadata.property' => ($this->privates['api_platform.cache.metadata.property'] ?? $this->getApiPlatform_Cache_Metadata_PropertyService());
        }, 15));

        $instance->setName('cache:pool:prune');

        return $instance;
    }

    /**
     * Gets the private 'console.command.cache_warmup' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
     */
    protected function getConsole_Command_CacheWarmupService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CacheWarmupCommand.php';

        $this->privates['console.command.cache_warmup'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand(($this->services['cache_warmer'] ?? $this->getCacheWarmerService()));

        $instance->setName('cache:warmup');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand
     */
    protected function getConsole_Command_ConfigDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDebugCommand.php';

        $this->privates['console.command.config_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand();

        $instance->setName('debug:config');

        return $instance;
    }

    /**
     * Gets the private 'console.command.config_dump_reference' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand
     */
    protected function getConsole_Command_ConfigDumpReferenceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/AbstractConfigCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ConfigDumpReferenceCommand.php';

        $this->privates['console.command.config_dump_reference'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand();

        $instance->setName('config:dump-reference');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand
     */
    protected function getConsole_Command_ContainerDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';

        $this->privates['console.command.container_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand();

        $instance->setName('debug:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.container_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand
     */
    protected function getConsole_Command_ContainerLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerLintCommand.php';

        $this->privates['console.command.container_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\ContainerLintCommand();

        $instance->setName('lint:container');

        return $instance;
    }

    /**
     * Gets the private 'console.command.debug_autowiring' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand
     */
    protected function getConsole_Command_DebugAutowiringService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerDebugCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/DebugAutowiringCommand.php';

        $this->privates['console.command.debug_autowiring'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand(NULL, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:autowiring');

        return $instance;
    }

    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    protected function getConsole_Command_EventDispatcherDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/EventDispatcherDebugCommand.php';

        $this->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setName('debug:event-dispatcher');

        return $instance;
    }

    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    protected function getConsole_Command_FormDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

        $this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'App\\Form\\Security', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 4 => 'Vich\\UploaderBundle\\Form\\Type', 5 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type'], [0 => 'App\\Form\\ContactType', 1 => 'App\\Form\\Security\\LoginType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 3 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 4 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 5 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 6 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 7 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 9 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension', 9 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
     */
    protected function getConsole_Command_RouterDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

        $this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:router');

        return $instance;
    }

    /**
     * Gets the private 'console.command.router_match' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
     */
    protected function getConsole_Command_RouterMatchService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/RouterMatchCommand.php';

        $this->privates['console.command.router_match'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand(($this->services['router'] ?? $this->getRouterService()));

        $instance->setName('router:match');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_decrypt_to_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand
     */
    protected function getConsole_Command_SecretsDecryptToLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsDecryptToLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_decrypt_to_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsDecryptToLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:decrypt-to-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_encrypt_from_local' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand
     */
    protected function getConsole_Command_SecretsEncryptFromLocalService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsEncryptFromLocalCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_encrypt_from_local'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsEncryptFromLocalCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:encrypt-from-local');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_generate_key' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand
     */
    protected function getConsole_Command_SecretsGenerateKeyService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsGenerateKeysCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_generate_key'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsGenerateKeysCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:generate-keys');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand
     */
    protected function getConsole_Command_SecretsListService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsListCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsListCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:list');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_remove' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand
     */
    protected function getConsole_Command_SecretsRemoveService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsRemoveCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_remove'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsRemoveCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:remove');

        return $instance;
    }

    /**
     * Gets the private 'console.command.secrets_set' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand
     */
    protected function getConsole_Command_SecretsSetService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/SecretsSetCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/AbstractVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/SodiumVault.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Secrets/DotenvVault.php';

        $this->privates['console.command.secrets_set'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\SecretsSetCommand(($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET')))), ($this->privates['secrets.local_vault'] ?? ($this->privates['secrets.local_vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\DotenvVault((\dirname(__DIR__, 4).'/.env.dev.local')))));

        $instance->setName('secrets:set');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    protected function getConsole_Command_TranslationDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php';

        $this->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($this->services['translator'] ?? $this->getTranslatorService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Twig/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php'), 13 => (\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Service/CacheClearer.php'), 14 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php'), 15 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/MenuFactory.php'), 16 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/ActionFactory.php'), 17 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/AssociationConfigurator.php'), 18 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CommonPreConfigurator.php'), 19 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php'), 20 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php')]);

        $instance->setName('debug:translation');

        return $instance;
    }

    /**
     * Gets the private 'console.command.translation_update' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand
     */
    protected function getConsole_Command_TranslationUpdateService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';

        $this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand(($this->privates['translation.writer'] ?? $this->getTranslation_WriterService()), ($this->privates['translation.reader'] ?? $this->getTranslation_ReaderService()), ($this->privates['translation.extractor'] ?? $this->getTranslation_ExtractorService()), 'fr', (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations')], [0 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 3 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 4 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 5 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/ValidatorBuilder.php'), 8 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 11 => (\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Twig/TranslationExtension.php'), 12 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Twig/EasyAdminTwigExtension.php'), 13 => (\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Service/CacheClearer.php'), 14 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/AdminContextFactory.php'), 15 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/MenuFactory.php'), 16 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/ActionFactory.php'), 17 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/AssociationConfigurator.php'), 18 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/CommonPreConfigurator.php'), 19 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/ChoiceConfigurator.php'), 20 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/SlugConfigurator.php')]);

        $instance->setName('translation:update');

        return $instance;
    }

    /**
     * Gets the private 'console.command.xliff_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand
     */
    protected function getConsole_Command_XliffLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Command/XliffLintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/XliffLintCommand.php';

        $this->privates['console.command.xliff_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand();

        $instance->setName('lint:xliff');

        return $instance;
    }

    /**
     * Gets the private 'console.command.yaml_lint' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand
     */
    protected function getConsole_Command_YamlLintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/YamlLintCommand.php';

        $this->privates['console.command.yaml_lint'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand();

        $instance->setName('lint:yaml');

        return $instance;
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/EventListener/ErrorListener.php';

        $a = new \Symfony\Bridge\Monolog\Logger('console');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener($a);
    }

    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    protected function getContainer_EnvVarProcessorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $this->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($this, new RewindableGenerator(function () {
            yield 0 => ($this->privates['secrets.vault'] ?? ($this->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/dev'), $this->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getAdminContextResolverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/ArgumentResolver/AdminContextResolver.php';

        return $this->privates['debug.EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\AdminContextResolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\AdminContextResolver(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.api_platform.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider
     */
    protected function getDebug_ApiPlatform_CollectionDataProviderService()
    {
        return $this->privates['debug.api_platform.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainCollectionDataProvider(new \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.collection_data_provider'] ?? $this->getApiPlatform_Doctrine_Orm_Default_CollectionDataProviderService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister
     */
    protected function getDebug_ApiPlatform_DataPersisterService()
    {
        return $this->privates['debug.api_platform.data_persister'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataPersister\TraceableChainDataPersister(new \ApiPlatform\Core\DataPersister\ChainDataPersister(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.data_persister'] ?? $this->getApiPlatform_Doctrine_Orm_DataPersisterService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider
     */
    protected function getDebug_ApiPlatform_ItemDataProviderService()
    {
        return $this->privates['debug.api_platform.item_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainItemDataProvider(new \ApiPlatform\Core\DataProvider\ChainItemDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.item_data_provider'] ?? $this->getApiPlatform_Doctrine_Orm_Default_ItemDataProviderService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.api_platform.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider
     */
    protected function getDebug_ApiPlatform_SubresourceDataProviderService()
    {
        return $this->privates['debug.api_platform.subresource_data_provider'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\DataProvider\TraceableChainSubresourceDataProvider(new \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['api_platform.doctrine.orm.default.subresource_data_provider'] ?? $this->getApiPlatform_Doctrine_Orm_Default_SubresourceDataProviderService());
        }, 1)));
    }

    /**
     * Gets the private 'debug.argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_DefaultService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/DefaultValueResolver.php';

        return $this->privates['debug.argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.not_tagged_controller' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_NotTaggedControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/NotTaggedControllerValueResolver.php';

        return $this->privates['debug.argument_resolver.not_tagged_controller'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver(($this->privates['.service_locator.gkOP6jo'] ?? $this->get_ServiceLocator_GkOP6joService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestValueResolver.php';

        return $this->privates['debug.argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_RequestAttributeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestAttributeValueResolver.php';

        return $this->privates['debug.argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_ServiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(($this->privates['.service_locator.gkOP6jo'] ?? $this->get_ServiceLocator_GkOP6joService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_SessionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/SessionValueResolver.php';

        return $this->privates['debug.argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_ArgumentResolver_VariadicService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/VariadicValueResolver.php';

        return $this->privates['debug.argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->privates['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DumpListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextualizedDumper.php';

        return $this->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), new \Symfony\Component\VarDumper\Dumper\ContextualizedDumper(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService()), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()))]), ($this->privates['var_dumper.server_connection'] ?? $this->getVarDumper_ServerConnectionService()));
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->getDebug_FileLinkFormatter_UrlFormatService());
        });
    }

    /**
     * Gets the private 'debug.file_link_formatter.url_format' shared service.
     *
     * @return \string
     */
    protected function getDebug_FileLinkFormatter_UrlFormatService()
    {
        return $this->privates['debug.file_link_formatter.url_format'] = \Symfony\Component\HttpKernel\Debug\FileLinkFormatter::generateUrlFormat(($this->services['router'] ?? $this->getRouterService()), '_profiler_open_file', '?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->getDebug_Security_Voter_Security_Access_AuthenticatedVoterService());
            yield 1 => ($this->privates['debug.security.voter.security.access.role_hierarchy_voter'] ?? $this->getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService());
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->getDebug_Security_Voter_Security_Access_ExpressionVoterService());
            yield 3 => ($this->privates['debug.security.voter.EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'] ?? $this->getSecurityVoterService());
        }, 4), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'debug.security.user_value_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    protected function getDebug_Security_UserValueResolverService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Controller/UserValueResolver.php';

        return $this->privates['debug.security.user_value_resolver'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\Security\Http\Controller\UserValueResolver(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'debug.security.voter.EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getSecurityVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Security/SecurityVoter.php';

        return $this->privates['debug.security.voter.EasyCorp\\Bundle\\EasyAdminBundle\\Security\\SecurityVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \EasyCorp\Bundle\EasyAdminBundle\Security\SecurityVoter(($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Security\\AuthorizationChecker'] ?? $this->getAuthorizationCheckerService()), ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $this->getAdminContextProviderService())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_AuthenticatedVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php';

        return $this->privates['debug.security.voter.security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver()))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_ExpressionVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/ExpressionVoter.php';

        return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(($this->privates['security.expression_language'] ?? $this->getSecurity_ExpressionLanguageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter
     */
    protected function getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleVoter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/RoleHierarchyVoter.php';

        return $this->privates['debug.security.voter.security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
    }

    /**
     * Gets the private 'debug.security.voter.vote_listener' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\VoteListener
     */
    protected function getDebug_Security_Voter_VoteListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/EventListener/VoteListener.php';

        return $this->privates['debug.security.voter.vote_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\VoteListener(($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()));
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/MetadataCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearMetadataCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearQueryCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_query_cache_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/ResultCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ClearResultCacheDoctrineCommand.php';

        $this->privates['doctrine.cache_clear_result_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-result');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CollectionRegionDoctrineCommand.php';

        $this->privates['doctrine.cache_collection_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();

        $instance->setName('doctrine:cache:clear-collection-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EntityRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_entity_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-entity-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryRegionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/QueryRegionCacheDoctrineCommand.php';

        $this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

        $instance->setName('doctrine:cache:clear-query-region');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/CreateDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DropDatabaseDoctrineCommand.php';

        $this->privates['doctrine.database_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()));

        $instance->setName('doctrine:database:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ImportDoctrineCommand.php';

        $this->privates['doctrine.database_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();

        $instance->setName('doctrine:database:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/EnsureProductionSettingsCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/EnsureProductionSettingsDoctrineCommand.php';

        $this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

        $instance->setName('doctrine:ensure-production-settings');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertMappingCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ConvertMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_convert_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();

        $instance->setName('doctrine:mapping:convert');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/ImportMappingDoctrineCommand.php';

        $this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

        $instance->setName('doctrine:mapping:import');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/InfoDoctrineCommand.php';

        $this->privates['doctrine.mapping_info_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();

        $instance->setName('doctrine:mapping:info');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/PropertyInfo/DoctrineExtractor.php';

        return $this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

        return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.proxy_cache_warmer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer
     */
    protected function getDoctrine_Orm_ProxyCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/CacheWarmer/ProxyCacheWarmer.php';

        return $this->privates['doctrine.orm.proxy_cache_warmer'] = new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntityValidator.php';

        return $this->privates['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunDqlDoctrineCommand.php';

        $this->privates['doctrine.query_dql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();

        $instance->setName('doctrine:query:dql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunSqlDoctrineCommand.php';

        $this->privates['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

        $instance->setName('doctrine:query:sql');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/CreateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/CreateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_create_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:create');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/DropCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/DropSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_drop_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:drop');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/UpdateSchemaDoctrineCommand.php';

        $this->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();

        $instance->setName('doctrine:schema:update');

        return $instance;
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ValidateSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Command/Proxy/ValidateSchemaCommand.php';

        $this->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.diff_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand
     */
    protected function getDoctrineMigrations_DiffCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DiffCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php';

        $this->privates['doctrine_migrations.diff_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

        $instance->setName('doctrine:migrations:diff');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.dump_schema_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand
     */
    protected function getDoctrineMigrations_DumpSchemaCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDumpSchemaDoctrineCommand.php';

        $this->privates['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

        $instance->setName('doctrine:migrations:dump-schema');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.execute_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand
     */
    protected function getDoctrineMigrations_ExecuteCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ExecuteCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsExecuteDoctrineCommand.php';

        $this->privates['doctrine_migrations.execute_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsExecuteDoctrineCommand();

        $instance->setName('doctrine:migrations:execute');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.generate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand
     */
    protected function getDoctrineMigrations_GenerateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/GenerateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsGenerateDoctrineCommand.php';

        $this->privates['doctrine_migrations.generate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsGenerateDoctrineCommand();

        $instance->setName('doctrine:migrations:generate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.latest_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand
     */
    protected function getDoctrineMigrations_LatestCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/LatestCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsLatestDoctrineCommand.php';

        $this->privates['doctrine_migrations.latest_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsLatestDoctrineCommand();

        $instance->setName('doctrine:migrations:latest');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.migrate_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand
     */
    protected function getDoctrineMigrations_MigrateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/MigrateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsMigrateDoctrineCommand.php';

        $this->privates['doctrine_migrations.migrate_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsMigrateDoctrineCommand();

        $instance->setName('doctrine:migrations:migrate');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.rollup_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand
     */
    protected function getDoctrineMigrations_RollupCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/RollupCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsRollupDoctrineCommand.php';

        $this->privates['doctrine_migrations.rollup_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsRollupDoctrineCommand();

        $instance->setName('doctrine:migrations:rollup');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.status_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand
     */
    protected function getDoctrineMigrations_StatusCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/StatusCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsStatusDoctrineCommand.php';

        $this->privates['doctrine_migrations.status_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsStatusDoctrineCommand();

        $instance->setName('doctrine:migrations:status');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.up_to_date_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand
     */
    protected function getDoctrineMigrations_UpToDateCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/UpToDateCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsUpToDateDoctrineCommand.php';

        $this->privates['doctrine_migrations.up_to_date_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsUpToDateDoctrineCommand();

        $instance->setName('doctrine:migrations:up-to-date');

        return $instance;
    }

    /**
     * Gets the private 'doctrine_migrations.version_command' shared service.
     *
     * @return \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand
     */
    protected function getDoctrineMigrations_VersionCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/VersionCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsVersionDoctrineCommand.php';

        $this->privates['doctrine_migrations.version_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsVersionDoctrineCommand();

        $instance->setName('doctrine:migrations:version');

        return $instance;
    }

    /**
     * Gets the private 'error_handler.error_renderer.html' shared service.
     *
     * @return \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer
     */
    protected function getErrorHandler_ErrorRenderer_HtmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/ErrorRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/error-handler/ErrorRenderer/HtmlErrorRenderer.php';

        $a = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

        return $this->privates['error_handler.error_renderer.html'] = new \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer(\Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::isDebug($a, true), 'UTF-8', ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), \Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer::getAndCleanOutputBuffer($a), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListener2Service()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'fidry_alice_data_fixtures.doctrine.persister_loader' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\PersisterLoader
     */
    protected function getFidryAliceDataFixtures_Doctrine_PersisterLoaderService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/PersisterLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/Processor/AdminProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/DataFixtures/Processor/UserProcessor.php';

        $a = ($this->privates['App\\Services\\PasswordService'] ?? $this->getPasswordServiceService());

        return $this->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] = new \Fidry\AliceDataFixtures\Loader\PersisterLoader($this->getFidryAliceDataFixtures_Loader_SimpleService(), ($this->services['fidry_alice_data_fixtures.persistence.persister.doctrine'] ?? $this->getFidryAliceDataFixtures_Persistence_Persister_DoctrineService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), [0 => new \App\DataFixtures\Processor\AdminProcessor($a), 1 => new \App\DataFixtures\Processor\UserProcessor($a)]);
    }

    /**
     * Gets the private 'fidry_alice_data_fixtures.loader.simple' shared service.
     *
     * @return \Fidry\AliceDataFixtures\Loader\SimpleLoader
     */
    protected function getFidryAliceDataFixtures_Loader_SimpleService($lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Loader/SimpleLoader.php';

        return new \Fidry\AliceDataFixtures\Loader\SimpleLoader(($this->services['nelmio_alice.files_loader'] ?? $this->getNelmioAlice_FilesLoaderService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'form.choice_list_factory.cached' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator
     */
    protected function getForm_ChoiceListFactory_CachedService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/CachingFactoryDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/PropertyAccessDecorator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

        return $this->privates['form.choice_list_factory.cached'] = new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ($this->privates['property_accessor'] ?? $this->getPropertyAccessorService())));
    }

    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ResolvedFormTypeFactory.php';

        return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', false],
            'App\\Form\\Security\\LoginType' => ['privates', 'App\\Form\\Security\\LoginType', 'getLoginTypeService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType', 'getCrudFormTypeService', false],
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => ['privates', 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType', 'getFiltersFormTypeService', false],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', false],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', false],
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => ['services', 'vich_uploader.form.type.file', 'getVichUploader_Form_Type_FileService', false],
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => ['services', 'vich_uploader.form.type.image', 'getVichUploader_Form_Type_ImageService', false],
        ], [
            'App\\Form\\ContactType' => '?',
            'App\\Form\\Security\\LoginType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType' => '?',
            'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FiltersFormType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->getForm_TypeExtension_Form_TransformationFailureHandlingService());
            yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->getForm_TypeExtension_Form_HttpFoundationService());
            yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->getForm_TypeExtension_Form_ValidatorService());
            yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->getForm_TypeExtension_Upload_ValidatorService());
            yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->getForm_TypeExtension_CsrfService());
            yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->getForm_TypeExtension_Form_DataCollectorService());
            yield 6 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EaCrudFormTypeExtension'] ?? $this->getEaCrudFormTypeExtensionService());
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => new RewindableGenerator(function () {
            yield 0 => ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] ?? ($this->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\CollectionTypeExtension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\CollectionTypeExtension()));
        }, 1)], new RewindableGenerator(function () {
            yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->getForm_TypeGuesser_ValidatorService());
            yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->getForm_TypeGuesser_DoctrineService());
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService())));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Util/ServerParams.php';

        return $this->privates['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php';

        return $this->privates['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(($this->privates['form.choice_list_factory.cached'] ?? $this->getForm_ChoiceListFactory_CachedService()));
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/DoctrineType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/Type/EntityType.php';

        return $this->privates['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/BaseType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FormType.php';

        return $this->privates['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(($this->privates['property_accessor'] ?? $this->getPropertyAccessorService()));
    }

    /**
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php';

        return $this->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()), true, '_token', ($this->services['translator'] ?? $this->getTranslatorService()), 'validators', ($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService()));
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/DataCollector/Type/DataCollectorTypeExtension.php';

        return $this->privates['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/Type/FormTypeHttpFoundationExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/HttpFoundation/HttpFoundationRequestHandler.php';

        return $this->privates['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(($this->privates['form.server_params'] ?? $this->getForm_ServerParamsService())));
    }

    /**
     * Gets the private 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php';

        return $this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(($this->services['translator'] ?? $this->getTranslatorService()));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php';

        return $this->privates['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php';

        return $this->privates['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(($this->services['translator'] ?? $this->getTranslatorService()), 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Form/DoctrineOrmTypeGuesser.php';

        return $this->privates['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/ValidatorTypeGuesser.php';

        return $this->privates['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(($this->services['validator'] ?? $this->getValidatorService()));
    }

    /**
     * Gets the private 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/RoutableFragmentRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/InlineFragmentRenderer.php';

        $this->privates['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_aware_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener
     */
    protected function getLocaleAwareListenerService()
    {
        return $this->privates['locale_aware_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleAwareListener(new RewindableGenerator(function () {
            yield 0 => ($this->privates['slugger'] ?? ($this->privates['slugger'] = new \Symfony\Component\String\Slugger\AsciiSlugger('fr')));
            yield 1 => ($this->privates['translator.default'] ?? $this->getTranslator_DefaultService());
        }, 2), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'fr', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'maker.auto_command.make_auth' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeAuthService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_auth'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeAuthenticator($a, ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), $b, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, $b);

        $instance->setName('make:auth');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_command' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCommandService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeCommand.php';

        $this->privates['maker.auto_command.make_command'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCommand(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:command');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_controller' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeControllerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeController.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_controller'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeController($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:controller');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_crud' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeCrudService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeCrud.php';

        $this->privates['maker.auto_command.make_crud'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeCrud(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:crud');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_entity' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeEntityService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/InputAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeEntity.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());
        $b = ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService());

        $this->privates['maker.auto_command.make_entity'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeEntity($a, ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), \dirname(__DIR__, 4), $b), $a, $b);

        $instance->setName('make:entity');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_fixtures' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFixturesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeFixtures.php';

        $this->privates['maker.auto_command.make_fixtures'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFixtures(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:fixtures');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeForm.php';

        $this->privates['maker.auto_command.make_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeForm(($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService()), ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService())), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_functional_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeFunctionalTestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeFunctionalTest.php';

        $this->privates['maker.auto_command.make_functional_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeFunctionalTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:functional-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_message' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeMessage.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_message'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessage($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:message');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_messenger_middleware' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMessengerMiddlewareService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeMessengerMiddleware.php';

        $this->privates['maker.auto_command.make_messenger_middleware'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMessengerMiddleware(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:messenger-middleware');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_migration' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeMigrationService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/ApplicationAwareMakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeMigration.php';

        $this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:migration');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeRegistrationFormService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeRegistrationForm.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_registration_form'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm($a, ($this->privates['maker.renderer.form_type_renderer'] ?? $this->getMaker_Renderer_FormTypeRendererService()), ($this->services['router'] ?? $this->getRouterService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:registration-form');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_reset_password' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeResetPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeResetPassword.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_reset_password'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeResetPassword($a), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:reset-password');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_encoder' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSerializerEncoder.php';

        $this->privates['maker.auto_command.make_serializer_encoder'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerEncoder(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:encoder');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_serializer_normalizer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSerializerNormalizerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSerializerNormalizer.php';

        $this->privates['maker.auto_command.make_serializer_normalizer'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSerializerNormalizer(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:serializer:normalizer');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_subscriber' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeSubscriberService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/EventRegistry.php';

        $this->privates['maker.auto_command.make_subscriber'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeSubscriber(new \Symfony\Bundle\MakerBundle\EventRegistry(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()))), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:subscriber');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_twig_extension' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeTwigExtensionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeTwigExtension.php';

        $this->privates['maker.auto_command.make_twig_extension'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeTwigExtension(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:twig-extension');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_unit_test' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUnitTestService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeUnitTest.php';

        $this->privates['maker.auto_command.make_unit_test'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUnitTest(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:unit-test');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_user' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeUserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeUser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Security/SecurityConfigUpdater.php';

        $a = ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService());

        $this->privates['maker.auto_command.make_user'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeUser($a, new \Symfony\Bundle\MakerBundle\Security\UserClassBuilder(), ($this->privates['maker.security_config_updater'] ?? ($this->privates['maker.security_config_updater'] = new \Symfony\Bundle\MakerBundle\Security\SecurityConfigUpdater())), ($this->privates['maker.doctrine_helper'] ?? $this->getMaker_DoctrineHelperService())), $a, ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:user');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_validator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeValidatorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeValidator.php';

        $this->privates['maker.auto_command.make_validator'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeValidator(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:validator');

        return $instance;
    }

    /**
     * Gets the private 'maker.auto_command.make_voter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    protected function getMaker_AutoCommand_MakeVoterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Command/MakerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/MakerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/AbstractMaker.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Maker/MakeVoter.php';

        $this->privates['maker.auto_command.make_voter'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeVoter(), ($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), ($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));

        $instance->setName('make:voter');

        return $instance;
    }

    /**
     * Gets the private 'maker.doctrine_helper' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper
     */
    protected function getMaker_DoctrineHelperService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Doctrine/DoctrineHelper.php';

        return $this->privates['maker.doctrine_helper'] = new \Symfony\Bundle\MakerBundle\Doctrine\DoctrineHelper('App\\Entity', ($this->services['doctrine'] ?? $this->getDoctrineService()));
    }

    /**
     * Gets the private 'maker.file_manager' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\FileManager
     */
    protected function getMaker_FileManagerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/FileManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/AutoloaderUtil.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/ComposerAutoloaderFinder.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $this->privates['maker.file_manager'] = new \Symfony\Bundle\MakerBundle\FileManager(($this->services['filesystem'] ?? ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), new \Symfony\Bundle\MakerBundle\Util\AutoloaderUtil(new \Symfony\Bundle\MakerBundle\Util\ComposerAutoloaderFinder('App')), \dirname(__DIR__, 4), (\dirname(__DIR__, 4).'/templates'));
    }

    /**
     * Gets the private 'maker.generator' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Generator
     */
    protected function getMaker_GeneratorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Generator.php';

        return $this->privates['maker.generator'] = new \Symfony\Bundle\MakerBundle\Generator(($this->privates['maker.file_manager'] ?? $this->getMaker_FileManagerService()), 'App');
    }

    /**
     * Gets the private 'maker.renderer.form_type_renderer' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer
     */
    protected function getMaker_Renderer_FormTypeRendererService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Renderer/FormTypeRenderer.php';

        return $this->privates['maker.renderer.form_type_renderer'] = new \Symfony\Bundle\MakerBundle\Renderer\FormTypeRenderer(($this->privates['maker.generator'] ?? $this->getMaker_GeneratorService()));
    }

    /**
     * Gets the private 'mime_types' shared service.
     *
     * @return \Symfony\Component\Mime\MimeTypes
     */
    protected function getMimeTypesService()
    {
        $this->privates['mime_types'] = $instance = new \Symfony\Component\Mime\MimeTypes();

        $instance->setDefault($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.command.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Command\ServerLogCommand
     */
    protected function getMonolog_Command_ServerLogService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/monolog-bridge/Command/ServerLogCommand.php';

        $this->privates['monolog.command.server_log'] = $instance = new \Symfony\Bridge\Monolog\Command\ServerLogCommand();

        $instance->setName('server:log');

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->privates['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'nelmio_alice.file_parser.runtime_cache' shared service.
     *
     * @return \Nelmio\Alice\Parser\RuntimeCacheParser
     */
    protected function getNelmioAlice_FileParser_RuntimeCacheService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/RuntimeCacheParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/ParserRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/ChainableParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/Chainable/YamlParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/yaml/Parser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/Chainable/PhpParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/Chainable/JsonParser.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/Alice/FileLocator/KernelFileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FileLocator/DefaultFileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/IncludeProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Parser/IncludeProcessor/DefaultIncludeProcessor.php';

        $a = new \Hautelook\AliceBundle\Alice\FileLocator\KernelFileLocator(new \Nelmio\Alice\FileLocator\DefaultFileLocator(), ($this->services['kernel'] ?? $this->get('kernel', 1)));

        return $this->privates['nelmio_alice.file_parser.runtime_cache'] = new \Nelmio\Alice\Parser\RuntimeCacheParser(new \Nelmio\Alice\Parser\ParserRegistry([0 => new \Nelmio\Alice\Parser\Chainable\YamlParser(new \Symfony\Component\Yaml\Parser()), 1 => new \Nelmio\Alice\Parser\Chainable\PhpParser(), 2 => new \Nelmio\Alice\Parser\Chainable\JsonParser()]), $a, new \Nelmio\Alice\Parser\IncludeProcessor\DefaultIncludeProcessor($a));
    }

    /**
     * Gets the private 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->privates['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(new \Nelmio\CorsBundle\Options\Resolver([0 => new \Nelmio\CorsBundle\Options\ConfigProvider($this->parameters['nelmio_cors.map'], $this->getParameter('nelmio_cors.defaults'))]));
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'php_translation.configuration.app' shared service.
     *
     * @return \Translation\Bundle\Model\Configuration
     */
    protected function getPhpTranslation_Configuration_AppService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Model/Configuration.php';

        return $this->privates['php_translation.configuration.app'] = new \Translation\Bundle\Model\Configuration(['dirs' => [0 => (\dirname(__DIR__, 4).'/templates'), 1 => (\dirname(__DIR__, 4).'/src')], 'output_dir' => (\dirname(__DIR__, 4).'/translations'), 'excluded_names' => [0 => '*TestCase.php', 1 => '*Test.php'], 'excluded_dirs' => [0 => 'cache', 1 => 'data', 2 => 'logs'], 'external_translations_dirs' => [], 'output_format' => 'xlf', 'blacklist_domains' => [], 'whitelist_domains' => [], 'remote_storage' => [], 'local_storage' => [0 => 'php_translation.local_file_storage.abstract'], 'xliff_version' => '2.0', 'local_file_storage_options' => [], 'project_root' => \dirname(__DIR__, 5), 'name' => 'app', 'locales' => $this->parameters['php_translation.locales']]);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), true);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->getPropertyInfo_SerializerExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService());
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    protected function getPropertyInfo_SerializerExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/SerializerExtractor.php';

        return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'router.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
     */
    protected function getRouter_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

        return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'router' => ['services', 'router', 'getRouterService', false],
        ], [
            'router' => '?',
        ]))->withContext('router.cache_warmer', $this));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';

        return $this->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/AccessMap.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/RequestMatcher.php';

        $this->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin_74ze5f/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin_74ze5f/'), [0 => 'ROLE_SUPER_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/login$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/user/'), [0 => 'ROLE_USER', 1 => 'ROLE_SUPER_ADMIN'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.listener.anonymous.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Anonymous_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

        return $this->privates['security.authentication.listener.anonymous.admin'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));
    }

    /**
     * Gets the private 'security.authentication.listener.guard.admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    protected function getSecurity_Authentication_Listener_Guard_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/GuardAuthenticatorHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';

        $a = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), []);
        $a->setSessionAuthenticationStrategy(new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'));

        return $this->privates['security.authentication.listener.guard.admin'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($a, ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'admin', new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\Guard\\AdminLoginAuthenticator'] ?? $this->getAdminLoginAuthenticatorService());
        }, 1), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.admin'] ?? $this->getSecurity_Authentication_Provider_Guard_AdminService());
            yield 1 => ($this->privates['security.authentication.provider.anonymous.admin'] ?? ($this->privates['security.authentication.provider.anonymous.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 2), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.guard.admin' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Guard_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authentication/Provider/AuthenticationProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Provider/GuardAuthenticationProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.provider.guard.admin'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
            yield 0 => ($this->privates['App\\Security\\Guard\\AdminLoginAuthenticator'] ?? $this->getAdminLoginAuthenticatorService());
        }, 1), ($this->privates['security.user.provider.concrete.admin'] ?? $this->getSecurity_User_Provider_Concrete_AdminService()), 'admin', ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), ($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService()));
    }

    /**
     * Gets the private 'security.authentication.switchuser_listener.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\SwitchUserListener
     */
    protected function getSecurity_Authentication_SwitchuserListener_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/SwitchUserListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserChecker.php';

        return $this->privates['security.authentication.switchuser_listener.admin'] = new \Symfony\Component\Security\Http\Firewall\SwitchUserListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.user.provider.concrete.admin'] ?? $this->getSecurity_User_Provider_Concrete_AdminService()), ($this->privates['security.user_checker'] ?? ($this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())), 'admin', ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), false);
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ChannelListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/RetryAuthenticationEntryPoint.php';

        return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? $this->getSecurity_AccessMapService()), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()));
    }

    /**
     * Gets the private 'security.command.user_password_encoder' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getSecurity_Command_UserPasswordEncoderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Command/UserPasswordEncoderCommand.php';

        $this->privates['security.command.user_password_encoder'] = $instance = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()), [0 => 'App\\Entity\\User', 1 => 'App\\Entity\\Admin']);

        $instance->setName('security:encode-password');

        return $instance;
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ContextListener.php';

        return $this->privates['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.user.provider.concrete.user'] ?? $this->getSecurity_User_Provider_Concrete_UserService());
            yield 1 => ($this->privates['security.user.provider.concrete.admin'] ?? $this->getSecurity_User_Provider_Concrete_AdminService());
        }, 2), 'admin', ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), [0 => ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), 1 => 'enableUsageTracking']);
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/ClearableTokenStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php';

        return $this->privates['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->getSessionService()));
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Encoder/EncoderFactory.php';

        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['algorithm' => 'auto', 'cost' => 15, 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'memory_cost' => NULL, 'time_cost' => NULL], 'App\\Entity\\Admin' => ['algorithm' => 'auto', 'cost' => 15, 'migrate_from' => [], 'hash_algorithm' => 'sha512', 'key_length' => 40, 'ignore_case' => false, 'encode_as_base64' => true, 'iterations' => 5000, 'memory_cost' => NULL, 'time_cost' => NULL]]);
    }

    /**
     * Gets the private 'security.expression_language' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\ExpressionLanguage
     */
    protected function getSecurity_ExpressionLanguageService()
    {
        $this->privates['security.expression_language'] = $instance = new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));

        $instance->registerProvider(($this->privates['api_platform.security.expression_language_provider'] ?? ($this->privates['api_platform.security.expression_language_provider'] = new \ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider())));

        return $instance;
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.admin' => ['privates', 'security.firewall.map.context.admin', 'getSecurity_Firewall_Map_Context_AdminService', false],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService', false],
        ], [
            'security.firewall.map.context.admin' => '?',
            'security.firewall.map.context.dev' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.j5wHqel'] ?? ($this->privates['.security.request_matcher.j5wHqel'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|img|js)/')));
            yield 'security.firewall.map.context.admin' => ($this->privates['.security.request_matcher.BQW9_t.'] ?? ($this->privates['.security.request_matcher.BQW9_t.'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^(/$|/user|/admin_74ze5f|/home/|/home$)')));
        }, 2));
    }

    /**
     * Gets the private 'security.firewall.map.context.admin' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/HttpUtils.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/DefaultLogoutSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/CsrfTokenClearingLogoutHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/SessionLogoutHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
        $b = ($this->services['router'] ?? $this->getRouterService());

        $c = new \Symfony\Component\Security\Http\HttpUtils($b, $b, '{^https?://%s$}i', '{^https://%s$}i');
        $d = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $c, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($c, '/'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/admin_74ze5f/logout']);
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler(($this->privates['security.csrf.token_storage'] ?? $this->getSecurity_Csrf_TokenStorageService())));
        $d->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        return $this->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.channel_listener'] ?? $this->getSecurity_ChannelListenerService());
            yield 1 => ($this->privates['security.context_listener.0'] ?? $this->getSecurity_ContextListener_0Service());
            yield 2 => ($this->privates['security.authentication.listener.guard.admin'] ?? $this->getSecurity_Authentication_Listener_Guard_AdminService());
            yield 3 => ($this->privates['security.authentication.listener.anonymous.admin'] ?? $this->getSecurity_Authentication_Listener_Anonymous_AdminService());
            yield 4 => ($this->privates['security.authentication.switchuser_listener.admin'] ?? $this->getSecurity_Authentication_SwitchuserListener_AdminService());
            yield 5 => ($this->privates['security.access_listener'] ?? $this->getSecurity_AccessListenerService());
        }, 6), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $c, 'admin', ($this->privates['App\\Security\\Guard\\AdminLoginAuthenticator'] ?? $this->getAdminLoginAuthenticatorService()), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->getMonolog_Logger_SecurityService()), false), $d, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.BQW9_t.', true, false, 'security.user.provider.concrete.admin', 'admin', 'App\\Security\\Guard\\AdminLoginAuthenticator', NULL, NULL, [0 => 'switch_user', 1 => 'guard', 2 => 'anonymous'], ['parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH']));
    }

    /**
     * Gets the private 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        return $this->privates['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), NULL, NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', '.security.request_matcher.j5wHqel', false, false, '', '', '', '', '', [], NULL));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('admin', '/admin_74ze5f/logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'security.user.provider.concrete.admin' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_AdminService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Security/User/EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.admin'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\Admin', 'email', NULL);
    }

    /**
     * Gets the private 'security.user.provider.concrete.user' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_UserService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/PasswordUpgraderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Security/User/EntityUserProvider.php';

        return $this->privates['security.user.provider.concrete.user'] = new \Symfony\Bridge\Doctrine\Security\User\EntityUserProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), 'App\\Entity\\User', 'email', NULL);
    }

    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

        return $this->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage();
        $a->registerProvider(($this->privates['api_platform.security.expression_language_provider'] ?? ($this->privates['api_platform.security.expression_language_provider'] = new \ApiPlatform\Core\Security\Core\Authorization\ExpressionLanguageProvider())));

        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), $a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'serializer.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
     */
    protected function getSerializer_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php';

        return $this->privates['serializer.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))], ($this->targetDir.''.'/serialization.php'));
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->privates['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain([0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()))]), NULL);
    }

    /**
     * Gets the private 'serializer.name_converter.metadata_aware' shared service.
     *
     * @return \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter
     */
    protected function getSerializer_NameConverter_MetadataAwareService()
    {
        return $this->privates['serializer.name_converter.metadata_aware'] = new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->getSerializer_Mapping_ClassMetadataFactoryService()));
    }

    /**
     * Gets the private 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

        return $this->privates['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage($this->parameters['session.storage.options'], NULL, new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService', false],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService', false],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'swiftmailer.command.debug' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand
     */
    protected function getSwiftmailer_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/DebugCommand.php';

        $this->privates['swiftmailer.command.debug'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand();

        $instance->setName('debug:swiftmailer');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.new_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand
     */
    protected function getSwiftmailer_Command_NewEmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/NewEmailCommand.php';

        $this->privates['swiftmailer.command.new_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand();

        $instance->setName('swiftmailer:email:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.command.send_email' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand
     */
    protected function getSwiftmailer_Command_SendEmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/AbstractSwiftMailerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/Command/SendEmailCommand.php';

        $this->privates['swiftmailer.command.send_email'] = $instance = new \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand();

        $instance->setName('swiftmailer:spool:send');

        return $instance;
    }

    /**
     * Gets the private 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/EventListener/EmailSenderListener.php';

        return $this->privates['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/ChainExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/AbstractFileExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Extractor/PhpExtractor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Translation/TwigExtractor.php';

        $this->privates['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', new \Symfony\Component\Translation\Extractor\PhpExtractor());
        $instance->addExtractor('twig', new \Symfony\Bridge\Twig\Translation\TwigExtractor(($this->services['twig'] ?? $this->getTwigService())));

        return $instance;
    }

    /**
     * Gets the private 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';

        return $this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the private 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';

        return $this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the private 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';

        return $this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the private 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the private 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';

        return $this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';

        return $this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the private 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';

        return $this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the private 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';

        return $this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the private 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';

        return $this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the private 'translation.loader.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';

        return $this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the private 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';

        return $this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the private 'translation.reader' shared service.
     *
     * @return \Symfony\Component\Translation\Reader\TranslationReader
     */
    protected function getTranslation_ReaderService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Reader/TranslationReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/LoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/ArrayLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/FileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PhpFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/YamlFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/XliffFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/PoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/MoFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/QtFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/CsvFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/IniFileLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Loader/JsonFileLoader.php';

        $this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

        $a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
        $b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

        $instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
        $instance->addLoader('yaml', $a);
        $instance->addLoader('yml', $a);
        $instance->addLoader('xlf', $b);
        $instance->addLoader('xliff', $b);
        $instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
        $instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
        $instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
        $instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
        $instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
        $instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
        $instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
        $instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

        return $instance;
    }

    /**
     * Gets the private 'translation.warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer
     */
    protected function getTranslation_WarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php';

        return $this->privates['translation.warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'translator' => '?',
        ]))->withContext('translation.warmer', $this));
    }

    /**
     * Gets the private 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/MoFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/QtFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IniFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

        $this->privates['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
        $instance->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
        $instance->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
        $instance->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
        $instance->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
        $instance->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
        $instance->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
        $instance->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
        $instance->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
        $instance->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
        $instance->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

        return $instance;
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->privates['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'translation.loader.csv' => ['privates', 'translation.loader.csv', 'getTranslation_Loader_CsvService', false],
            'translation.loader.dat' => ['privates', 'translation.loader.dat', 'getTranslation_Loader_DatService', false],
            'translation.loader.ini' => ['privates', 'translation.loader.ini', 'getTranslation_Loader_IniService', false],
            'translation.loader.json' => ['privates', 'translation.loader.json', 'getTranslation_Loader_JsonService', false],
            'translation.loader.mo' => ['privates', 'translation.loader.mo', 'getTranslation_Loader_MoService', false],
            'translation.loader.php' => ['privates', 'translation.loader.php', 'getTranslation_Loader_PhpService', false],
            'translation.loader.po' => ['privates', 'translation.loader.po', 'getTranslation_Loader_PoService', false],
            'translation.loader.qt' => ['privates', 'translation.loader.qt', 'getTranslation_Loader_QtService', false],
            'translation.loader.res' => ['privates', 'translation.loader.res', 'getTranslation_Loader_ResService', false],
            'translation.loader.xliff' => ['privates', 'translation.loader.xliff', 'getTranslation_Loader_XliffService', false],
            'translation.loader.yml' => ['privates', 'translation.loader.yml', 'getTranslation_Loader_YmlService', false],
        ], [
            'translation.loader.csv' => '?',
            'translation.loader.dat' => '?',
            'translation.loader.ini' => '?',
            'translation.loader.json' => '?',
            'translation.loader.mo' => '?',
            'translation.loader.php' => '?',
            'translation.loader.po' => '?',
            'translation.loader.qt' => '?',
            'translation.loader.res' => '?',
            'translation.loader.xliff' => '?',
            'translation.loader.yml' => '?',
        ]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\IdentityTranslator()), 'fr', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDir.''.'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ar.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ar.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ar.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ar.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ar.php')], 'az' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.az.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.az.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.az.xlf')], 'be' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.be.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.be.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.be.xlf')], 'bg' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.bg.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.bg.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.bg.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.bg.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.bg.php')], 'ca' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ca.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ca.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ca.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ca.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ca.php')], 'cs' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cs.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.cs.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.cs.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.cs.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.cs.php')], 'cy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.da.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.da.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.da.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.da.php')], 'de' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.de.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.de.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.de.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.de.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.de.php')], 'el' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.el.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.el.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.el.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.el.php')], 'en' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.en.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.en.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.en.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.en.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.en.php'), 5 => (\dirname(__DIR__, 4).'/translations/messages.en.xlf')], 'es' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.es.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.es.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.es.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.es.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.es.php')], 'et' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.et.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.et.xlf')], 'eu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.eu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.eu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.eu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.eu.php')], 'fa' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fa.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fa.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fa.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fa.php')], 'fi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.fi.yaml'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fi.php')], 'fr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.fr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.fr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.fr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.fr.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.fr.php'), 5 => (\dirname(__DIR__, 4).'/translations/VichUploaderBundle.fr.xlf'), 6 => (\dirname(__DIR__, 4).'/translations/messages.fr.xlf')], 'gl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.gl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.gl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.gl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.gl.php')], 'he' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.he.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.he.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.he.xlf')], 'hr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hr.php')], 'hu' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hu.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hu.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.hu.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.hu.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.hu.php')], 'hy' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.hy.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.hy.xlf')], 'id' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.id.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.id.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.id.xlf')], 'it' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.it.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.it.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.it.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.it.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.it.php')], 'ja' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ja.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ja.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ja.xlf')], 'lb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lb.xlf')], 'lt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lt.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.lt.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.lt.php')], 'lv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.lv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.lv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.lv.xlf')], 'mn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.mn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nb.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nb.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nb.xlf')], 'nl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.nl.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.nl.php')], 'nn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.nn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.nn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.nn.xlf')], 'no' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.no.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.no.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.no.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.no.php')], 'pl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.pl.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pl.php')], 'pt' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.pt.yaml'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt.php')], 'pt_BR' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.pt_BR.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.pt_BR.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_BR.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.pt_BR.php')], 'ro' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ro.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ro.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ro.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ro.php')], 'ru' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.ru.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.ru.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.ru.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.ru.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.ru.php')], 'sk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sk.xlf')], 'sl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sl.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.sl.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sl.php')], 'sq' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sr_Latn.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.sv.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.sv.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.sv.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sv.php')], 'th' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.th.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.th.xlf')], 'tl' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tl.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tl.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tl.xlf')], 'tr' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.tr.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.tr.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.tr.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.tr.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.tr.php')], 'uk' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.uk.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.uk.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.uk.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.uk.yaml'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.uk.php')], 'vi' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.vi.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.vi.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_CN.xlf'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations/validators.zh_CN.xlf'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.zh_CN.xlf'), 3 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.zh_CN.php')], 'zh_TW' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations/security.pt_PT.xlf')], 'vn' => [0 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations/messages.vn.yaml')], 'sr_RS' => [0 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations/EasyAdminBundle.sr_RS.php')]], 'scanned_directories' => [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security-core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/translations'), 4 => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Resources/translations'), 5 => (\dirname(__DIR__, 4).'/translations'), 6 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/translations'), 7 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/translations'), 8 => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src/translations'), 9 => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src/translations'), 10 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/translations'), 11 => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/translations'), 12 => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/translations'), 13 => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/translations'), 14 => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle/translations'), 15 => (\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle/translations'), 16 => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/translations'), 17 => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle/translations'), 18 => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/translations'), 19 => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/translations'), 20 => (\dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Bridge/Symfony/translations'), 21 => (\dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Symfony/translations'), 22 => (\dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src/translations'), 23 => (\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/translations'), 24 => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle/translations')], 'cache_vary' => ['scanned_directories' => [0 => 'vendor/symfony/validator/Resources/translations', 1 => 'vendor/symfony/form/Resources/translations', 2 => 'vendor/symfony/security-core/Resources/translations', 3 => 'vendor/vich/uploader-bundle/translations', 4 => 'vendor/easycorp/easyadmin-bundle/src/Resources/translations', 5 => 'translations', 6 => 'vendor/symfony/framework-bundle/translations', 7 => 'vendor/symfony/twig-bundle/translations', 8 => 'vendor/twig/extra-bundle/src/translations', 9 => 'vendor/sensio/framework-extra-bundle/src/translations', 10 => 'vendor/doctrine/doctrine-bundle/translations', 11 => 'vendor/doctrine/doctrine-migrations-bundle/translations', 12 => 'vendor/symfony/security-bundle/translations', 13 => 'vendor/symfony/web-profiler-bundle/translations', 14 => 'vendor/symfony/monolog-bundle/translations', 15 => 'vendor/symfony/debug-bundle/translations', 16 => 'vendor/symfony/maker-bundle/src/translations', 17 => 'vendor/nelmio/cors-bundle/translations', 18 => 'vendor/api-platform/core/src/Bridge/Symfony/Bundle/translations', 19 => 'vendor/lexik/jwt-authentication-bundle/translations', 20 => 'vendor/nelmio/alice/src/Bridge/Symfony/translations', 21 => 'vendor/theofidry/alice-data-fixtures/src/Bridge/Symfony/translations', 22 => 'vendor/hautelook/alice-bundle/src/translations', 23 => 'vendor/php-translation/symfony-bundle/translations', 24 => 'vendor/symfony/swiftmailer-bundle/translations']]]);

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));
        $instance->setFallbackLocales($this->parameters['php_translation.locales']);

        return $instance;
    }

    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    protected function getTwig_Command_DebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/DebugCommand.php';

        $this->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($this->services['twig'] ?? $this->getTwigService()), \dirname(__DIR__, 4), $this->parameters['kernel.bundles_metadata'], (\dirname(__DIR__, 4).'/templates'), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.command.lint' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Command\LintCommand
     */
    protected function getTwig_Command_LintService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Command/LintCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/Command/LintCommand.php';

        $this->privates['twig.command.lint'] = $instance = new \Symfony\Bundle\TwigBundle\Command\LintCommand(($this->services['twig'] ?? $this->getTwigService()));

        $instance->setName('lint:twig');

        return $instance;
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Component\Form\FormRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRenderer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormRendererEngineInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractRendererEngine.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Form/TwigRendererEngine.php';

        return $this->privates['twig.form.renderer'] = new \Symfony\Component\Form\FormRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine($this->parameters['twig.form.resources'], ($this->services['twig'] ?? $this->getTwigService())), ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.mailer.message_listener' shared service.
     *
     * @return \Symfony\Component\Mailer\EventListener\MessageListener
     */
    protected function getTwig_Mailer_MessageListenerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/EventListener/MessageListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mime/BodyRendererInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Mime/BodyRenderer.php';

        return $this->privates['twig.mailer.message_listener'] = new \Symfony\Component\Mailer\EventListener\MessageListener(NULL, new \Symfony\Bridge\Twig\Mime\BodyRenderer(($this->services['twig'] ?? $this->getTwigService())));
    }

    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

        return $this->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', false],
        ], [
            'inline' => '?',
        ]), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true));
    }

    /**
     * Gets the private 'twig.runtime.security_csrf' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CsrfRuntime
     */
    protected function getTwig_Runtime_SecurityCsrfService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/CsrfRuntime.php';

        return $this->privates['twig.runtime.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfRuntime(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
    }

    /**
     * Gets the private 'twig.template_cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer
     */
    protected function getTwig_TemplateCacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bundle/TemplateIterator.php';

        return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'twig' => ['services', 'twig', 'getTwigService', false],
        ], [
            'twig' => 'Twig\\Environment',
        ]))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel', 1)), [(\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email') => 'email', (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form') => NULL], (\dirname(__DIR__, 4).'/templates')));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService', false],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService', false],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService', false],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService', false],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService', false],
        ], [
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        if ($this->has('translator')) {
            $instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));
        }
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->addYamlMappings([0 => (\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle/Resources/config/validation.yaml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));

        return $instance;
    }

    /**
     * Gets the private 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/EmailValidator.php';

        return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');
    }

    /**
     * Gets the private 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/ExpressionValidator.php';

        return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the private 'validator.mapping.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
     */
    protected function getValidator_Mapping_CacheWarmerService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php';

        return $this->privates['validator.mapping.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService()), ($this->targetDir.''.'/validation.php'));
    }

    /**
     * Gets the private 'validator.not_compromised_password' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator
     */
    protected function getValidator_NotCompromisedPasswordService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/Constraints/NotCompromisedPasswordValidator.php';

        return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()), 'UTF-8', true, NULL);
    }

    /**
     * Gets the private 'var_dumper.command.server_dump' shared service.
     *
     * @return \Symfony\Component\VarDumper\Command\ServerDumpCommand
     */
    protected function getVarDumper_Command_ServerDumpService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Command/ServerDumpCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Server/DumpServer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php';

        $a = new \Symfony\Bridge\Monolog\Logger('debug');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->privates['var_dumper.command.server_dump'] = $instance = new \Symfony\Component\VarDumper\Command\ServerDumpCommand(new \Symfony\Component\VarDumper\Server\DumpServer('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), $a), ['cli' => new \Symfony\Component\VarDumper\Command\Descriptor\CliDescriptor(($this->privates['var_dumper.contextualized_cli_dumper.inner'] ?? $this->getVarDumper_ContextualizedCliDumper_InnerService())), 'html' => new \Symfony\Component\VarDumper\Command\Descriptor\HtmlDescriptor(($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()))]);

        $instance->setName('server:dump');

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.contextualized_cli_dumper.inner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_ContextualizedCliDumper_InnerService()
    {
        $this->privates['var_dumper.contextualized_cli_dumper.inner'] = $instance = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.server_connection' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\Connection
     */
    protected function getVarDumper_ServerConnectionService()
    {
        return $this->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()]);
    }

    /**
     * Gets the private 'vich_uploader.command.mapping_debug' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingDebugCommand
     */
    protected function getVichUploader_Command_MappingDebugService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Command/MappingDebugCommand.php';

        $this->privates['vich_uploader.command.mapping_debug'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugCommand($this->parameters['vich_uploader.mappings']);

        $instance->setName('vich:mapping:debug');

        return $instance;
    }

    /**
     * Gets the private 'vich_uploader.command.mapping_debug_class' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingDebugClassCommand
     */
    protected function getVichUploader_Command_MappingDebugClassService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Command/MappingDebugClassCommand.php';

        $this->privates['vich_uploader.command.mapping_debug_class'] = $instance = new \Vich\UploaderBundle\Command\MappingDebugClassCommand(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:debug-class');

        return $instance;
    }

    /**
     * Gets the private 'vich_uploader.command.mapping_list_classes' shared service.
     *
     * @return \Vich\UploaderBundle\Command\MappingListClassesCommand
     */
    protected function getVichUploader_Command_MappingListClassesService()
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Command/MappingListClassesCommand.php';

        $this->privates['vich_uploader.command.mapping_list_classes'] = $instance = new \Vich\UploaderBundle\Command\MappingListClassesCommand(($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()));

        $instance->setName('vich:mapping:list-classes');

        return $instance;
    }

    /**
     * Gets the private 'vich_uploader.metadata_reader' shared service.
     *
     * @return \Vich\UploaderBundle\Metadata\MetadataReader
     */
    protected function getVichUploader_MetadataReaderService()
    {
        $a = new \Metadata\Driver\FileLocator([]);

        $b = new \Metadata\MetadataFactory(new \Metadata\Driver\DriverChain([0 => new \Vich\UploaderBundle\Metadata\Driver\XmlDriver($a), 1 => new \Vich\UploaderBundle\Metadata\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService())), 2 => new \Vich\UploaderBundle\Metadata\Driver\YamlDriver($a)]), 'Metadata\\ClassHierarchyMetadata', true);
        $b->setCache(new \Metadata\Cache\FileCache(($this->targetDir.''.'/vich_uploader')));

        return $this->privates['vich_uploader.metadata_reader'] = new \Vich\UploaderBundle\Metadata\MetadataReader($b);
    }

    /**
     * Gets the private 'vich_uploader.property_mapping_factory' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingFactory
     */
    protected function getVichUploader_PropertyMappingFactoryService()
    {
        return $this->privates['vich_uploader.property_mapping_factory'] = new \Vich\UploaderBundle\Mapping\PropertyMappingFactory($this, ($this->privates['vich_uploader.metadata_reader'] ?? $this->getVichUploader_MetadataReaderService()), $this->parameters['vich_uploader.mappings'], '_name');
    }

    /**
     * Gets the private 'vich_uploader.storage.file_system' shared service.
     *
     * @return \Vich\UploaderBundle\Storage\FileSystemStorage
     */
    protected function getVichUploader_Storage_FileSystemService()
    {
        return $this->privates['vich_uploader.storage.file_system'] = new \Vich\UploaderBundle\Storage\FileSystemStorage(($this->privates['vich_uploader.property_mapping_factory'] ?? $this->getVichUploader_PropertyMappingFactoryService()));
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter(string $name)
    {
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter(string $name): bool
    {
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter(string $name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'serializer.mapping.cache.file' => false,
        'doctrine.orm.proxy_dir' => false,
        'nelmio_cors.defaults' => false,
        'lexik_jwt_authentication.pass_phrase' => false,
        'lexik_jwt_authentication.token_ttl' => false,
        'swiftmailer.spool.default.memory.path' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/App_KernelDevDebugContainer.xml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDir.''.'/serialization.php'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'nelmio_cors.defaults': $value = [
                'allow_origin' => [
                    0 => $this->getEnv('CORS_ALLOW_ORIGIN'),
                ],
                'allow_credentials' => false,
                'allow_headers' => [
                    0 => 'content-type',
                    1 => 'authorization',
                ],
                'expose_headers' => [
                    0 => 'Link',
                ],
                'allow_methods' => [
                    0 => 'GET',
                    1 => 'OPTIONS',
                    2 => 'POST',
                    3 => 'PUT',
                    4 => 'PATCH',
                    5 => 'DELETE',
                ],
                'max_age' => 3600,
                'hosts' => [

                ],
                'origin_regex' => true,
                'forced_allow_origin_value' => NULL,
            ]; break;
            case 'lexik_jwt_authentication.pass_phrase': $value = $this->getEnv('JWT_PASSPHRASE'); break;
            case 'lexik_jwt_authentication.token_ttl': $value = $this->getEnv('JWT_TOKEN_TTL'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDir.''.'/swiftmailer/spool/default'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'TwigExtraBundle' => 'Twig\\Extra\\TwigExtraBundle\\TwigExtraBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'ApiPlatformBundle' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\ApiPlatformBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'NelmioAliceBundle' => 'Nelmio\\Alice\\Bridge\\Symfony\\NelmioAliceBundle',
                'FidryAliceDataFixturesBundle' => 'Fidry\\AliceDataFixtures\\Bridge\\Symfony\\FidryAliceDataFixturesBundle',
                'HautelookAliceBundle' => 'Hautelook\\AliceBundle\\HautelookAliceBundle',
                'TranslationBundle' => 'Translation\\Bundle\\TranslationBundle',
                'VichUploaderBundle' => 'Vich\\UploaderBundle\\VichUploaderBundle',
                'EasyAdminBundle' => 'EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
            ],
            'kernel.bundles_metadata' => [
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'TwigExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/twig/extra-bundle/src'),
                    'namespace' => 'Twig\\Extra\\TwigExtraBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
                'NelmioCorsBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ],
                'ApiPlatformBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Symfony/Bundle'),
                    'namespace' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle',
                ],
                'LexikJWTAuthenticationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ],
                'NelmioAliceBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/nelmio/alice/src/Bridge/Symfony'),
                    'namespace' => 'Nelmio\\Alice\\Bridge\\Symfony',
                ],
                'FidryAliceDataFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/theofidry/alice-data-fixtures/src/Bridge/Symfony'),
                    'namespace' => 'Fidry\\AliceDataFixtures\\Bridge\\Symfony',
                ],
                'HautelookAliceBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/hautelook/alice-bundle/src'),
                    'namespace' => 'Hautelook\\AliceBundle',
                ],
                'TranslationBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/php-translation/symfony-bundle'),
                    'namespace' => 'Translation\\Bundle',
                ],
                'VichUploaderBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/vich/uploader-bundle'),
                    'namespace' => 'Vich\\UploaderBundle',
                ],
                'EasyAdminBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src'),
                    'namespace' => 'EasyCorp\\Bundle\\EasyAdminBundle',
                ],
                'SwiftmailerBundle' => [
                    'path' => (\dirname(__DIR__, 4).'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'App_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'container.dumper.inline_factories' => true,
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'fr',
            'kernel.error_controller' => 'error_controller',
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'translator.default_path' => (\dirname(__DIR__, 4).'/translations'),
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'twig.form.resources' => [
                0 => '@VichUploader/Form/fields.html.twig',
                1 => 'form_div_layout.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'security.role_hierarchy.roles' => [
                'ROLE_ADMIN' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'nelmio_cors.map' => [
                '^/' => [

                ],
            ],
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'api_platform.enable_entrypoint' => true,
            'api_platform.enable_docs' => true,
            'api_platform.title' => 'Sentraider API',
            'api_platform.description' => '',
            'api_platform.version' => '1.0.0',
            'api_platform.show_webby' => true,
            'api_platform.exception_to_status' => [
                'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => 400,
                'ApiPlatform\\Core\\Exception\\InvalidArgumentException' => 400,
                'ApiPlatform\\Core\\Exception\\FilterValidationException' => 400,
                'Doctrine\\ORM\\OptimisticLockException' => 409,
            ],
            'api_platform.formats' => [
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
                'json' => [
                    0 => 'application/json',
                ],
                'html' => [
                    0 => 'text/html',
                ],
            ],
            'api_platform.patch_formats' => [
                'json' => [
                    0 => 'application/merge-patch+json',
                ],
            ],
            'api_platform.error_formats' => [
                'jsonproblem' => [
                    0 => 'application/problem+json',
                ],
                'jsonld' => [
                    0 => 'application/ld+json',
                ],
            ],
            'api_platform.allow_plain_identifiers' => false,
            'api_platform.eager_loading.enabled' => true,
            'api_platform.eager_loading.max_joins' => 30,
            'api_platform.eager_loading.fetch_partial' => false,
            'api_platform.eager_loading.force_eager' => true,
            'api_platform.collection.exists_parameter_name' => 'exists',
            'api_platform.collection.order' => 'ASC',
            'api_platform.collection.order_parameter_name' => 'order',
            'api_platform.collection.pagination.enabled' => true,
            'api_platform.collection.pagination.partial' => false,
            'api_platform.collection.pagination.client_enabled' => false,
            'api_platform.collection.pagination.client_items_per_page' => false,
            'api_platform.collection.pagination.client_partial' => false,
            'api_platform.collection.pagination.items_per_page' => 30,
            'api_platform.collection.pagination.maximum_items_per_page' => NULL,
            'api_platform.collection.pagination.page_parameter_name' => 'page',
            'api_platform.collection.pagination.enabled_parameter_name' => 'pagination',
            'api_platform.collection.pagination.items_per_page_parameter_name' => 'itemsPerPage',
            'api_platform.collection.pagination.partial_parameter_name' => 'partial',
            'api_platform.collection.pagination' => [
                'enabled' => true,
                'partial' => false,
                'client_enabled' => false,
                'client_items_per_page' => false,
                'client_partial' => false,
                'items_per_page' => 30,
                'maximum_items_per_page' => NULL,
                'page_parameter_name' => 'page',
                'enabled_parameter_name' => 'pagination',
                'items_per_page_parameter_name' => 'itemsPerPage',
                'partial_parameter_name' => 'partial',
            ],
            'api_platform.http_cache.etag' => true,
            'api_platform.http_cache.max_age' => NULL,
            'api_platform.http_cache.shared_max_age' => NULL,
            'api_platform.http_cache.vary' => [
                0 => 'Accept',
            ],
            'api_platform.http_cache.public' => NULL,
            'api_platform.resource_class_directories' => [
                0 => (\dirname(__DIR__, 4).'/src/Entity'),
            ],
            'api_platform.oauth.enabled' => false,
            'api_platform.oauth.clientId' => '',
            'api_platform.oauth.clientSecret' => '',
            'api_platform.oauth.type' => 'oauth2',
            'api_platform.oauth.flow' => 'application',
            'api_platform.oauth.tokenUrl' => '/oauth/v2/token',
            'api_platform.oauth.authorizationUrl' => '/oauth/v2/auth',
            'api_platform.oauth.scopes' => [

            ],
            'api_platform.swagger.versions' => [
                0 => 3,
            ],
            'api_platform.enable_swagger_ui' => true,
            'api_platform.enable_re_doc' => true,
            'api_platform.swagger.api_keys' => [
                'apiKey' => [
                    'name' => 'Authorization',
                    'type' => 'header',
                ],
            ],
            'api_platform.graphql.enabled' => true,
            'api_platform.graphql.graphiql.enabled' => true,
            'api_platform.graphql.graphql_playground.enabled' => false,
            'api_platform.graphql.collection.pagination' => [
                'enabled' => true,
            ],
            'api_platform.graphql.default_ide' => 'graphiql',
            'api_platform.graphql.nesting_separator' => '_',
            'api_platform.validator.serialize_payload_fields' => [

            ],
            'api_platform.elasticsearch.enabled' => false,
            'lexik_jwt_authentication.clock_skew' => 0,
            'lexik_jwt_authentication.user_identity_field' => 'username',
            'lexik_jwt_authentication.user_id_claim' => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine' => 'openssl',
            'nelmio_alice.functions_blacklist' => [
                0 => 'current',
                1 => 'shuffle',
                2 => 'date',
                3 => 'time',
                4 => 'file',
                5 => 'md5',
                6 => 'sha1',
            ],
            'nelmio_alice.locale' => 'en_US',
            'nelmio_alice.seed' => 1,
            'nelmio_alice.loading_limit' => 5,
            'nelmio_alice.max_unique_values_retry' => 150,
            'fidry_alice_data_fixtures.default_purge_mode' => 'delete',
            'hautelook_alice.fixtures_path' => [
                0 => 'fixtures',
            ],
            'hautelook_alice.root_dirs' => [
                0 => \dirname(__DIR__, 4),
            ],
            'extractor_vendor_dir' => (\dirname(__DIR__, 4).'/vendor/php-translation/extractor/src'),
            'php_translation.locales' => [
                0 => 'fr',
            ],
            'php_translation.default_locale' => 'fr',
            'php_translation.webui.enabled' => true,
            'php_translation.webui.allow_create' => true,
            'php_translation.webui.allow_delete' => true,
            'php_translation.webui.file_base_path' => (\dirname(__DIR__, 4).'/'),
            'php_translation.toolbar.allow_edit' => true,
            'vich_uploader.default_filename_attribute_suffix' => '_name',
            'vich_uploader.mappings' => [
                'city_images' => [
                    'uri_prefix' => '/uploads/images',
                    'upload_destination' => (\dirname(__DIR__, 4).'/public/uploads/images'),
                    'namer' => [
                        'service' => 'Vich\\UploaderBundle\\Naming\\UniqidNamer.city_images',
                        'options' => [

                        ],
                    ],
                    'directory_namer' => [
                        'service' => NULL,
                        'options' => NULL,
                    ],
                    'delete_on_remove' => true,
                    'delete_on_update' => true,
                    'inject_on_load' => false,
                    'db_driver' => 'orm',
                ],
            ],
            'vich_uploader.file_injector.class' => 'Vich\\UploaderBundle\\Injector\\FileInjector',
            'easyadmin.config' => [

            ],
            'swiftmailer.mailer.default.transport.name' => 'dynamic',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'api_platform.data_collector.request' => [
                    0 => 'api_platform.data_collector.request',
                    1 => '@ApiPlatform/DataCollector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'php_translation.data_collector' => [
                    0 => 'translation',
                    1 => '@Translation/SymfonyProfiler/translation.html.twig',
                ],
                'App\\DataCollector\\ListUserCollector' => [
                    0 => 'app.sentraider_fr',
                    1 => 'data_collector/layout.html.twig',
                ],
                'mailer.data_collector' => [
                    0 => 'mailer',
                    1 => '@WebProfiler/Collector/mailer.html.twig',
                ],
                'Vich\\UploaderBundle\\DataCollector\\MappingCollector' => [
                    0 => 'vich_uploader.mapping_collector',
                    1 => '@VichUploader/Collector/mapping_collector.html.twig',
                ],
                'EasyCorp\\Bundle\\EasyAdminBundle\\Inspector\\DataCollector' => [
                    0 => 'easyadmin',
                    1 => '@EasyAdmin/inspector/data_collector.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.api_platform.json_schema.json_schema_generate_command',
                1 => 'console.command.public_alias.api_platform.swagger.command.swagger_command',
                2 => 'hautelook_alice.console.command.doctrine.doctrine_orm_load_data_fixtures_command',
            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
