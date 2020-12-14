import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Mascots from './components/Mascots';
import Illustrations from './components/Illustrations';
import LoadersAnimation from './components/LoadersAnimation';
import Wallpaper from './components/Wallpaper';
import NotFound from './components/NotFound';


export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/Logo-symbol',
            component: LogoSymbol,
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/mascots',
            component: Mascots
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAnimation
        },
        {
            path: '/wallpapers',
            component: Wallpaper
        }
    ]
};