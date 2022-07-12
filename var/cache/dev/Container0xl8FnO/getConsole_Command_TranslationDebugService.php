<?php

namespace Container0xl8FnO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'D:\\237digital/translations', 'D:\\237digital/templates', [0 => 'D:\\237digital\\vendor\\symfony\\validator/Resources/translations', 1 => 'D:\\237digital\\vendor\\symfony\\form/Resources/translations', 2 => 'D:\\237digital\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'D:\\237digital\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'D:\\237digital\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'D:\\237digital\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 3 => 'D:\\237digital\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 4 => 'D:\\237digital\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php', 5 => 'D:\\237digital\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 6 => 'D:\\237digital\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 7 => 'D:\\237digital\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 8 => 'D:\\237digital\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php', 9 => 'D:\\237digital\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 10 => 'D:\\237digital\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 11 => 'D:\\237digital\\vendor\\symfony\\validator\\ValidatorBuilder.php', 12 => 'D:\\237digital\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 13 => 'D:\\237digital\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php', 14 => 'D:\\237digital\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'], []);

        $instance->setName('debug:translation');
        $instance->setDescription('Display translation messages information');

        return $instance;
    }
}
