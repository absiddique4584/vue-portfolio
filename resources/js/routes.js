

import AdminHome from './components/admin/AdminHome'
//Hero section
import AdminHero from './components/admin/hero/List'
import AddHero from './components/admin/hero/Add'
import EditHero from './components/admin/hero/Edit'
import ViewHero from './components/admin/hero/View'
//Facts Section
import AdminFacts from './components/admin/facts/List'
import Factview from './components/admin/facts/View'
import FactEdit from './components/admin/facts/Edit'
import Addfact from './components/admin/facts/Add'

//skills
import SkillList from './components/admin/skills/List'
import SkillAdd from './components/admin/skills/Add'
import Skill2Add from './components/admin/skills/Add2'
import editSkill from './components/admin/skills/Edit'
import editSkill2 from './components/admin/skills/Edit2'

//services
import AdminServices from './components/admin/service/List'
import AdminAddServices from './components/admin/service/Add'
import UpdateServices from './components/admin/service/Edit'

//testimonials
import testimonialList from './components/admin/testimonial/List'
import testimonialAdd from './components/admin/testimonial/Add'


export const routes = [
    {
        path: '/home',
        component: AdminHome
    },

    //Hero Section
    {
        path: '/hero',
        component: AdminHero
    },

    {
        path: '/add-hero',
        component: AddHero
    },
    {
        path: '/edit-hero/:heroID',
        component: EditHero
    },
    {
        path: '/view-hero/:viewID',
        component: ViewHero
    },

    //Facts Section
    {
        path: '/facts',
        component: AdminFacts
    },

    {
        path: '/fact-view/:factID',
        component: Factview
    },
    {
        path: '/fact-edit/:edit_factID',
        component: FactEdit
    },
    {
        path: '/add-fact',
        component: Addfact
    },

//skills
    {
        path: '/skills',
        component: SkillList
    },
    {
        path: '/add-skill',
        component: SkillAdd
    },
    {
        path: '/add-skill2',
        component: Skill2Add
    },
    {
        path: '/edit-skill/:skillID',
        component: editSkill
    },
    {
        path: '/edit-skill2/:skill2ID',
        component: editSkill2
    },

    //services
    {
        path: '/Services',
        component: AdminServices
    },
    {
        path: '/add-Service',
        component: AdminAddServices
    },
    {
        path: '/edit-service/:serviceID',
        component: UpdateServices
    },

    //testimonials

    {
        path: '/testimonials',
        component: testimonialList
    },
    {
        path: '/add-testimonial',
        component: testimonialAdd
    },


]

