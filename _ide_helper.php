<?php
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 9.19.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

    namespace Clockwork\Support\Laravel { 
            /**
     * 
     *
     */ 
        class Facade {
                    /**
         * 
         *
         * @static 
         */ 
        public static function addDataSource($dataSource)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->addDataSource($dataSource);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveRequest()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveAsCommand($name, $exitCode = null, $arguments = [], $options = [], $argumentsDefaults = [], $optionsDefaults = [], $output = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveAsCommand($name, $exitCode, $arguments, $options, $argumentsDefaults, $optionsDefaults, $output);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveAsQueueJob($name, $description = null, $status = 'processed', $payload = [], $queue = null, $connection = null, $options = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveAsQueueJob($name, $description, $status, $payload, $queue, $connection, $options);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function resolveAsTest($name, $status = 'passed', $statusMessage = null, $asserts = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->resolveAsTest($name, $status, $statusMessage, $asserts);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function extendRequest($request = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->extendRequest($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function storeRequest()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->storeRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reset()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->reset();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function request($request = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->request($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function log($level = null, $message = null, $context = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->log($level, $message, $context);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function timeline()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->timeline();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function event($description, $data = [])
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->event($description, $data);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldCollect($shouldCollect = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->shouldCollect($shouldCollect);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function shouldRecord($shouldRecord = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->shouldRecord($shouldRecord);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function dataSources($dataSources = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->dataSources($dataSources);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function storage($storage = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->storage($storage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function authenticator($authenticator = null)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->authenticator($authenticator);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getDataSources()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getDataSources();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getRequest()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getRequest();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setRequest($request)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->setRequest($request);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getStorage()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getStorage();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStorage($storage)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->setStorage($storage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function getAuthenticator()
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->getAuthenticator();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setAuthenticator($authenticator)
        {
                        /** @var \Clockwork\Clockwork $instance */
                        return $instance->setAuthenticator($authenticator);
        }
         
    }
     
}

    namespace Laravel\Octane\Facades { 
            /**
     * 
     *
     * @see \Laravel\Octane\Octane
     */ 
        class Octane {
                    /**
         * Get a Swoole table instance.
         *
         * @param string $table
         * @return \Swoole\Table 
         * @static 
         */ 
        public static function table($table)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->table($table);
        }
                    /**
         * Format an exception to a string that should be returned to the client.
         *
         * @param \Throwable $e
         * @param bool $debug
         * @return string 
         * @static 
         */ 
        public static function formatExceptionForClient($e, $debug = false)
        {
                        return \Laravel\Octane\Octane::formatExceptionForClient($e, $debug);
        }
                    /**
         * Concurrently resolve the given callbacks via background tasks, returning the results.
         * 
         * Results will be keyed by their given keys - if a task did not finish, the tasks value will be "false".
         *
         * @param array $tasks
         * @param int $waitMilliseconds
         * @return array 
         * @throws \Laravel\Octane\Exceptions\TaskException
         * @throws \Laravel\Octane\Exceptions\TaskTimeoutException
         * @static 
         */ 
        public static function concurrently($tasks, $waitMilliseconds = 3000)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->concurrently($tasks, $waitMilliseconds);
        }
                    /**
         * Get the task dispatcher.
         *
         * @return \Laravel\Octane\Contracts\DispatchesTasks 
         * @static 
         */ 
        public static function tasks()
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->tasks();
        }
                    /**
         * Get the listeners that will prepare the Laravel application for a new request.
         *
         * @return array 
         * @static 
         */ 
        public static function prepareApplicationForNextRequest()
        {
                        return \Laravel\Octane\Octane::prepareApplicationForNextRequest();
        }
                    /**
         * Get the listeners that will prepare the Laravel application for a new operation.
         *
         * @return array 
         * @static 
         */ 
        public static function prepareApplicationForNextOperation()
        {
                        return \Laravel\Octane\Octane::prepareApplicationForNextOperation();
        }
                    /**
         * Get the container bindings / services that should be pre-resolved by default.
         *
         * @return array 
         * @static 
         */ 
        public static function defaultServicesToWarm()
        {
                        return \Laravel\Octane\Octane::defaultServicesToWarm();
        }
                    /**
         * Register a Octane route.
         *
         * @param string $method
         * @param string $uri
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function route($method, $uri, $callback)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        $instance->route($method, $uri, $callback);
        }
                    /**
         * Determine if a route exists for the given method and URI.
         *
         * @param string $method
         * @param string $uri
         * @return bool 
         * @static 
         */ 
        public static function hasRouteFor($method, $uri)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->hasRouteFor($method, $uri);
        }
                    /**
         * Invoke the route for the given method and URI.
         *
         * @param \Illuminate\Http\Request $request
         * @param string $method
         * @param string $uri
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function invokeRoute($request, $method, $uri)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->invokeRoute($request, $method, $uri);
        }
                    /**
         * Register a callback to be called every N seconds.
         *
         * @param string $key
         * @param callable $callback
         * @param int $seconds
         * @param bool $immediate
         * @return \Laravel\Octane\Swoole\InvokeTickCallable 
         * @static 
         */ 
        public static function tick($key, $callback, $seconds = 1, $immediate = true)
        {
                        /** @var \Laravel\Octane\Octane $instance */
                        return $instance->tick($key, $callback, $seconds, $immediate);
        }
         
    }
     
}

    namespace Laratrust { 
            /**
     * This class is the main entry point of laratrust. Usually this the interaction
     * with this class will be done through the Laratrust Facade
     *
     * @license MIT
     * @package Laratrust
     */ 
        class LaratrustFacade {
                    /**
         * Checks if the current user has a role by its name.
         *
         * @param string $role Role name.
         * @return bool 
         * @static 
         */ 
        public static function hasRole($role, $team = null, $requireAll = false)
        {
                        /** @var \Laratrust\Laratrust $instance */
                        return $instance->hasRole($role, $team, $requireAll);
        }
                    /**
         * Check if the current user has a permission by its name.
         *
         * @param string $permission Permission string.
         * @return bool 
         * @static 
         */ 
        public static function isAbleTo($permission, $team = null, $requireAll = false)
        {
                        /** @var \Laratrust\Laratrust $instance */
                        return $instance->isAbleTo($permission, $team, $requireAll);
        }
                    /**
         * Check if the current user has a role or permission by its name.
         *
         * @param array|string $roles The role(s) needed.
         * @param array|string $permissions The permission(s) needed.
         * @param array $options The Options.
         * @return bool 
         * @static 
         */ 
        public static function ability($roles, $permissions, $team = null, $options = [])
        {
                        /** @var \Laratrust\Laratrust $instance */
                        return $instance->ability($roles, $permissions, $team, $options);
        }
                    /**
         * Checks if the user owns the thing.
         *
         * @param Object $thing
         * @param string $foreignKeyName
         * @return boolean 
         * @static 
         */ 
        public static function owns($thing, $foreignKeyName = null)
        {
                        /** @var \Laratrust\Laratrust $instance */
                        return $instance->owns($thing, $foreignKeyName);
        }
                    /**
         * Checks if the user has some role and if he owns the thing.
         *
         * @param string|array $role
         * @param Object $thing
         * @param array $options
         * @return boolean 
         * @static 
         */ 
        public static function hasRoleAndOwns($role, $thing, $options = [])
        {
                        /** @var \Laratrust\Laratrust $instance */
                        return $instance->hasRoleAndOwns($role, $thing, $options);
        }
                    /**
         * Checks if the user can do something and if he owns the thing.
         *
         * @param string|array $permission
         * @param Object $thing
         * @param array $options
         * @return boolean 
         * @static 
         */ 
        public static function isAbleToAndOwns($permission, $thing, $options = [])
        {
                        /** @var \Laratrust\Laratrust $instance */
                        return $instance->isAbleToAndOwns($permission, $thing, $options);
        }
                    /**
         * Get the currently authenticated user or null.
         *
         * @return \Illuminate\Auth\UserInterface|null 
         * @static 
         */ 
        public static function user()
        {
                        /** @var \Laratrust\Laratrust $instance */
                        return $instance->user();
        }
         
    }
     
}

    namespace Spatie\LaravelIgnition\Facades { 
            /**
     * 
     *
     * @see \Spatie\FlareClient\Flare
     */ 
        class Flare {
                    /**
         * 
         *
         * @static 
         */ 
        public static function make($apiKey = null, $contextDetector = null)
        {
                        return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setApiToken($apiToken)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setApiToken($apiToken);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function apiTokenSet()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->apiTokenSet();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setBaseUrl($baseUrl)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setBaseUrl($baseUrl);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setStage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setStage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendReportsImmediately()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendReportsImmediately();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function determineVersionUsing($determineVersionCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->determineVersionUsing($determineVersionCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportErrorLevels($reportErrorLevels)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportErrorLevels($reportErrorLevels);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function version()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->version();
        }
                    /**
         * 
         *
         * @return \Spatie\FlareClient\array<int, FlareMiddleware|class-string<FlareMiddleware>>
         * @static 
         */ 
        public static function getMiddleware()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContextProviderDetector($contextDetector)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContextProviderDetector($contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerFlareHandlers()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerFlareHandlers();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerExceptionHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerExceptionHandler();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function registerErrorHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerErrorHandler();
        }
                    /**
         * 
         *
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|\Spatie\FlareClient\array<FlareMiddleware>|\Spatie\FlareClient\class-string<FlareMiddleware> $middleware
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function registerMiddleware($middleware)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerMiddleware($middleware);
        }
                    /**
         * 
         *
         * @return \Spatie\FlareClient\array<int,FlareMiddleware|\Spatie\FlareClient\class-string<FlareMiddleware>> 
         * @static 
         */ 
        public static function getMiddlewares()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddlewares();
        }
                    /**
         * 
         *
         * @param string $name
         * @param string $messageLevel
         * @param \Spatie\FlareClient\array<int,  mixed> $metaData
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->glow($name, $messageLevel, $metaData);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function handleException($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleException($throwable);
        }
                    /**
         * 
         *
         * @return mixed 
         * @static 
         */ 
        public static function handleError($code, $message, $file = '', $line = 0)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleError($code, $message, $file, $line);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function applicationPath($applicationPath)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->applicationPath($applicationPath);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function report($throwable, $callback = null, $report = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->report($throwable, $callback, $report);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reportMessage($message, $logLevel, $callback = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportMessage($message, $logLevel, $callback);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function sendTestReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendTestReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function reset()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reset();
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function anonymizeIp()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->anonymizeIp();
        }
                    /**
         * 
         *
         * @param \Spatie\FlareClient\array<int,  string> $fieldNames
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function censorRequestBodyFields($fieldNames)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->censorRequestBodyFields($fieldNames);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function createReportFromMessage($message, $logLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReportFromMessage($message, $logLevel);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function stage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->stage($stage);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function messageLevel($messageLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->messageLevel($messageLevel);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param mixed $default
         * @return \Spatie\FlareClient\array<int, mixed>
         * @static 
         */ 
        public static function getGroup($groupName = 'context', $default = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getGroup($groupName, $default);
        }
                    /**
         * 
         *
         * @static 
         */ 
        public static function context($key, $value)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->context($key, $value);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param \Spatie\FlareClient\array<string,  mixed> $properties
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function group($groupName, $properties)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->group($groupName, $properties);
        }
         
    }
     
}

    namespace Illuminate\Http { 
            /**
     * 
     *
     */ 
        class Request {
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */ 
        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
         
    }
     
}


namespace  { 
            class Clockwork extends \Clockwork\Support\Laravel\Facade {}
            class Octane extends \Laravel\Octane\Facades\Octane {}
            class Laratrust extends \Laratrust\LaratrustFacade {}
            class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
     
}


namespace {
    

use Illuminate\Contracts\Support\DeferringDisplayableValue;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Arr;
use Illuminate\Support\Env;
use Illuminate\Support\HigherOrderTapProxy;
use Illuminate\Support\Optional;
use Illuminate\Support\Str;

if (! function_exists('append_config')) {
    /**
     * Assign high numeric IDs to a config item to force appending.
     *
     * @param  array  $array
     * @return array
     */
    function append_config(array $array)
    {
        $start = 9999;

        foreach ($array as $key => $value) {
            if (is_numeric($key)) {
                $start++;

                $array[$start] = Arr::pull($array, $key);
            }
        }

        return $array;
    }
}

if (! function_exists('blank')) {
    /**
     * Determine if the given value is "blank".
     *
     * @param  mixed  $value
     * @return bool
     */
    function blank($value)
    {
        if (is_null($value)) {
            return true;
        }

        if (is_string($value)) {
            return trim($value) === '';
        }

        if (is_numeric($value) || is_bool($value)) {
            return false;
        }

        if ($value instanceof Countable) {
            return count($value) === 0;
        }

        return empty($value);
    }
}

if (! function_exists('class_basename')) {
    /**
     * Get the class "basename" of the given object / class.
     *
     * @param  string|object  $class
     * @return string
     */
    function class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\', '/', $class));
    }
}

if (! function_exists('class_uses_recursive')) {
    /**
     * Returns all traits used by a class, its parent classes and trait of their traits.
     *
     * @param  object|string  $class
     * @return array
     */
    function class_uses_recursive($class)
    {
        if (is_object($class)) {
            $class = get_class($class);
        }

        $results = [];

        foreach (array_reverse(class_parents($class)) + [$class => $class] as $class) {
            $results += trait_uses_recursive($class);
        }

        return array_unique($results);
    }
}

if (! function_exists('e')) {
    /**
     * Encode HTML special characters in a string.
     *
     * @param  \Illuminate\Contracts\Support\DeferringDisplayableValue|\Illuminate\Contracts\Support\Htmlable|string|null  $value
     * @param  bool  $doubleEncode
     * @return string
     */
    function e($value, $doubleEncode = true)
    {
        if ($value instanceof DeferringDisplayableValue) {
            $value = $value->resolveDisplayableValue();
        }

        if ($value instanceof Htmlable) {
            return $value->toHtml();
        }

        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8', $doubleEncode);
    }
}

if (! function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        return Env::get($key, $default);
    }
}

if (! function_exists('filled')) {
    /**
     * Determine if a value is "filled".
     *
     * @param  mixed  $value
     * @return bool
     */
    function filled($value)
    {
        return ! blank($value);
    }
}

if (! function_exists('object_get')) {
    /**
     * Get an item from an object using "dot" notation.
     *
     * @param  object  $object
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    function object_get($object, $key, $default = null)
    {
        if (is_null($key) || trim($key) === '') {
            return $object;
        }

        foreach (explode('.', $key) as $segment) {
            if (! is_object($object) || ! isset($object->{$segment})) {
                return value($default);
            }

            $object = $object->{$segment};
        }

        return $object;
    }
}

if (! function_exists('optional')) {
    /**
     * Provide access to optional objects.
     *
     * @param  mixed  $value
     * @param  callable|null  $callback
     * @return mixed
     */
    function optional($value = null, callable $callback = null)
    {
        if (is_null($callback)) {
            return new Optional($value);
        } elseif (! is_null($value)) {
            return $callback($value);
        }
    }
}

if (! function_exists('preg_replace_array')) {
    /**
     * Replace a given pattern with each value in the array in sequentially.
     *
     * @param  string  $pattern
     * @param  array  $replacements
     * @param  string  $subject
     * @return string
     */
    function preg_replace_array($pattern, array $replacements, $subject)
    {
        return preg_replace_callback($pattern, function () use (&$replacements) {
            foreach ($replacements as $value) {
                return array_shift($replacements);
            }
        }, $subject);
    }
}

if (! function_exists('retry')) {
    /**
     * Retry an operation a given number of times.
     *
     * @param  int|array  $times
     * @param  callable  $callback
     * @param  int|\Closure  $sleepMilliseconds
     * @param  callable|null  $when
     * @return mixed
     *
     * @throws \Exception
     */
    function retry($times, callable $callback, $sleepMilliseconds = 0, $when = null)
    {
        $attempts = 0;

        $backoff = [];

        if (is_array($times)) {
            $backoff = $times;

            $times = count($times) + 1;
        }

        beginning:
        $attempts++;
        $times--;

        try {
            return $callback($attempts);
        } catch (Exception $e) {
            if ($times < 1 || ($when && ! $when($e))) {
                throw $e;
            }

            $sleepMilliseconds = $backoff[$attempts - 1] ?? $sleepMilliseconds;

            if ($sleepMilliseconds) {
                usleep(value($sleepMilliseconds, $attempts, $e) * 1000);
            }

            goto beginning;
        }
    }
}

if (! function_exists('str')) {
    /**
     * Get a new stringable object from the given string.
     *
     * @param  string|null  $string
     * @return \Illuminate\Support\Stringable|mixed
     */
    function str($string = null)
    {
        if (func_num_args() === 0) {
            return new class
            {
                public function __call($method, $parameters)
                {
                    return Str::$method(...$parameters);
                }

                public function __toString()
                {
                    return '';
                }
            };
        }

        return Str::of($string);
    }
}

if (! function_exists('tap')) {
    /**
     * Call the given Closure with the given value then return the value.
     *
     * @param  mixed  $value
     * @param  callable|null  $callback
     * @return mixed
     */
    function tap($value, $callback = null)
    {
        if (is_null($callback)) {
            return new HigherOrderTapProxy($value);
        }

        $callback($value);

        return $value;
    }
}

if (! function_exists('throw_if')) {
    /**
     * Throw the given exception if the given condition is true.
     *
     * @param  mixed  $condition
     * @param  \Throwable|string  $exception
     * @param  mixed  ...$parameters
     * @return mixed
     *
     * @throws \Throwable
     */
    function throw_if($condition, $exception = 'RuntimeException', ...$parameters)
    {
        if ($condition) {
            if (is_string($exception) && class_exists($exception)) {
                $exception = new $exception(...$parameters);
            }

            throw is_string($exception) ? new RuntimeException($exception) : $exception;
        }

        return $condition;
    }
}

if (! function_exists('throw_unless')) {
    /**
     * Throw the given exception unless the given condition is true.
     *
     * @param  mixed  $condition
     * @param  \Throwable|string  $exception
     * @param  mixed  ...$parameters
     * @return mixed
     *
     * @throws \Throwable
     */
    function throw_unless($condition, $exception = 'RuntimeException', ...$parameters)
    {
        throw_if(! $condition, $exception, ...$parameters);

        return $condition;
    }
}

if (! function_exists('trait_uses_recursive')) {
    /**
     * Returns all traits used by a trait and its traits.
     *
     * @param  string  $trait
     * @return array
     */
    function trait_uses_recursive($trait)
    {
        $traits = class_uses($trait) ?: [];

        foreach ($traits as $trait) {
            $traits += trait_uses_recursive($trait);
        }

        return $traits;
    }
}

if (! function_exists('transform')) {
    /**
     * Transform the given value if it is present.
     *
     * @param  mixed  $value
     * @param  callable  $callback
     * @param  mixed  $default
     * @return mixed|null
     */
    function transform($value, callable $callback, $default = null)
    {
        if (filled($value)) {
            return $callback($value);
        }

        if (is_callable($default)) {
            return $default($value);
        }

        return $default;
    }
}

if (! function_exists('windows_os')) {
    /**
     * Determine whether the current environment is Windows based.
     *
     * @return bool
     */
    function windows_os()
    {
        return PHP_OS_FAMILY === 'Windows';
    }
}

if (! function_exists('with')) {
    /**
     * Return the given value, optionally passed through the given callback.
     *
     * @template TValue
     *
     * @param  TValue  $value
     * @param  (callable(TValue): TValue)|null  $callback
     * @return TValue
     */
    function with($value, callable $callback = null)
    {
        return is_null($callback) ? $value : $callback($value);
    }
}
 
}

namespace Illuminate\Support {
    /**
     * Methods commonly used in migrations
     *
     * @method Fluent after(string $column) Add the after modifier
     * @method Fluent charset(string $charset) Add the character set modifier
     * @method Fluent collation(string $collation) Add the collation modifier
     * @method Fluent comment(string $comment) Add comment
     * @method Fluent default($value) Add the default modifier
     * @method Fluent first() Select first row
     * @method Fluent index(string $name = null) Add the in dex clause
     * @method Fluent on(string $table) `on` of a foreign key
     * @method Fluent onDelete(string $action) `on delete` of a foreign key
     * @method Fluent onUpdate(string $action) `on update` of a foreign key
     * @method Fluent primary() Add the primary key modifier
     * @method Fluent references(string $column) `references` of a foreign key
     * @method Fluent nullable(bool $value = true) Add the nullable modifier
     * @method Fluent unique(string $name = null) Add unique index clause
     * @method Fluent unsigned() Add the unsigned modifier
     * @method Fluent useCurrent() Add the default timestamp value
     * @method Fluent change() Add the change modifier
     */
    class Fluent {}
}

