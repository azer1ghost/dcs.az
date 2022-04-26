<?php

namespace App\Traits;

use TCG\Voyager\Traits\Translatable as TranslatableAlias;

trait Translatable
{
    use TranslatableAlias;

    public function setAttributeTranslations($attribute, array $translations, $save = false): array
    {
        $response = [];

        if (!$this->relationLoaded('translations')) {
            $this->load('translations');
        }

        $default = config('voyager.multilingual.default', 'en');
        $locales = config('voyager.multilingual.locales', [$default]);

        foreach ($locales as $locale) {
            if (empty($translations[$locale])) {
                $this->translations()->where('locale', $locale)->delete();
                continue;
            }

            if ($locale == $default) {
                $this->$attribute = $translations[$locale];
                continue;
            }

            $translator = $this->translate($locale, false);
            $translator->$attribute = $translations[$locale];

            if ($save) {
                $translator->save();
            }

            $response[] = $translator;
        }

        return $response;
    }
}
