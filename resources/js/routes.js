

import AdminHome from './components/admin/AdminHome'
//Hero section
import AdminHero from './components/admin/hero/List'
import AddHero from './components/admin/hero/Add'
import EditHero from './components/admin/hero/Edit'
import ViewHero from './components/admin/hero/View'

//hero background
import backgroundAdd from './components/admin/hero/background/Add'
import backgroundEdit from './components/admin/hero/background/Edit'
//About
import AboutList from './components/admin/about/List'
import AboutAdd from './components/admin/about/Add'
import aboutShow from './components/admin/about/Show'
import aboutEdit from './components/admin/about/Edit'

//Facts Section
import AdminFacts from './components/admin/facts/List'
import Factview from './components/admin/facts/View'
import FactEdit from './components/admin/facts/Edit'
import Addfact from './components/admin/facts/Add'
//fact header description
import AddfactHeader from './components/admin/facts/header/Add'
import EditfactHeader from './components/admin/facts/header/Edit'

//skills
import SkillList from './components/admin/skills/List'
import SkillAdd from './components/admin/skills/Add'
import Skill2Add from './components/admin/skills/Add2'
import editSkill from './components/admin/skills/Edit'
import editSkill2 from './components/admin/skills/Edit2'

//skill header
import addSkillheader from './components/admin/skills/skillheader/Add'
import editSkillheader from './components/admin/skills/skillheader/Edit'

//services
import AdminServices from './components/admin/service/List'
import AdminAddServices from './components/admin/service/Add'
import UpdateServices from './components/admin/service/Edit'

//testimonials
import testimonialList from './components/admin/testimonial/List'
import testimonialAdd from './components/admin/testimonial/Add'
import testimonialedit from './components/admin/testimonial/Edit'
//resume-education
import resumeList from './components/admin/resume/List'
import resumeEducationShow from './components/admin/resume/education/Show'
import resumeEducationEdit from './components/admin/resume/education/Edit'
import resumeEducationAdd from './components/admin/resume/education/Add'
//resume-experience
import resumeExperienceShow from './components/admin/resume/experience/Show'
import resumeAddexperience from './components/admin/resume/experience/Add'
import resumeExperienceEdit from './components/admin/resume/experience/Edit'
//portfolio
import portfolioList from './components/admin/portfolio/List'
import categoryAdd from './components/admin/portfolio/Add'
import categoryEdit from './components/admin/portfolio/Edit'

//portfolio body
import portfolioAdd from './components/admin/portfolio/portfolio-body/Add'
import portfolioEdit from './components/admin/portfolio/portfolio-body/Edit'


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
    //hero background section

    {
        path: '/add-background',
        component: backgroundAdd
    },
    {
        path: '/edit-background/:backgroundID',
        component: backgroundEdit
    },

    //Abouts
    {
      path: '/abouts',
      component: AboutList
    },
    {
      path: '/add-about',
      component: AboutAdd
    },
    {
      path: '/show-about/:showID',
      component: aboutShow
    },
    {
      path: '/edit-about/:aboutID',
      component: aboutEdit
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

    //fact header description
    {
        path: '/add-fact/header',
        component: AddfactHeader
    },

    {
        path: '/factHeader-edit/:factheaderID',
        component: EditfactHeader
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


   //skill Header Section
    {
        path: '/add-skillheader',
        component: addSkillheader
    },
    {
        path: '/edit-skillheader/:skillheaderID',
        component: editSkillheader
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
    {
        path: '/edit-testimonial/:testID',
        component: testimonialedit
    },
    //resumes--education
    {
        path:'/resumes',
        component: resumeList
    },
    {
        path:'/resume/education/show/:resumeID',
        component: resumeEducationShow
    },
    {
        path:'/resume/education/edit/:educationID',
        component: resumeEducationEdit
    } ,
    {
        path:'/add-education',
        component: resumeEducationAdd
    } ,

    //resume-experience

    {
        path:'/resume/experience/show/:experience_showID',
        component: resumeExperienceShow
    },

    {
        path:'/resume/experience/edit/:experienceID',
        component: resumeExperienceEdit
    },
    {
        path:'/add-experience',
        component: resumeAddexperience
    },


    //portfolio
    {
        path:'/portfolio',
        component: portfolioList
    },
    {
        path:'/add-category',
        component: categoryAdd
    },
    {
        path:'/edit/category/:categoryID',
        component: categoryEdit
    },

    //portfolio body
    {
        path:'/add-portfolio',
        component: portfolioAdd
    },
    {
        path:'/edit/portfolio/:portfolioID',
        component: portfolioEdit
    }


]


