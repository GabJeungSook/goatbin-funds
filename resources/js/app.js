import Alpine from 'alpinejs'
import Focus from '@alpinejs/focus'
import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'

Alpine.plugin(Focus)
Alpine.plugin(FormsAlpinePlugin)
window.Alpine = Alpine
Alpine.start()
