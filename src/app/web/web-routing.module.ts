import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './pages/home/home.component';
import { AboutComponent } from './pages/about/about.component';
import { FeaturesComponent } from './pages/features/features.component';
import { PricingComponent } from './pages/pricing/pricing.component';
import { DemoComponent } from './pages/demo/demo.component';
import { ContactComponent } from './pages/contact/contact.component';
import { WebLayoutComponent } from './web-layout.component';

const routes: Routes = [
  {
    path: '',
    component: WebLayoutComponent,
    children: [
      {
        path: '',
        component: HomeComponent,
      },
      {
        path: 'about',
        component: AboutComponent,
      },
      {
        path: 'features',
        component: FeaturesComponent,
      },
      {
        path: 'pricing',
        component: PricingComponent,
      },
      {
        path: 'demo',
        component: DemoComponent,
      },
      {
        path: 'contact-us',
        component: ContactComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class WebRoutingModule {}
