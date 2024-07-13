import { Component } from '@angular/core';
import { AppName } from 'src/app/constants';

@Component({
  selector: 'app-features',
  templateUrl: './features.component.html',
  styleUrls: ['./features.component.scss'],
})
export class FeaturesComponent {
  appName = AppName;
  features: {
    icon: string;
    title: string;
    description: string;
    isNew?: boolean;
  }[] = [
    {
      icon: 'bi-people',
      title: 'Customer Management',
      description:
        'Connect with your customers wherever they are, no matter what.',
    },
    {
      icon: 'bi-briefcase',
      title: 'Underwriting',
      description: `Your insurance platform wouldn't be complete if it didn't include capabilities to manage policies.`,
    },
    {
      icon: 'bi-file-pdf',
      title: 'Policy Management',
      description: `Policy documents are instantly saved at the moment you receive the policy.`,
    },
    {
      icon: 'bi-folder-plus',
      title: 'Claims Management',
      description: `Simplify the entire process, from filing to resolution, ensuring efficiency, accuracy, and faster settlements.`,
    },
    {
      icon: 'bi-wallet2',
      title: 'Premium Collection & Allocation',
      description: `Collect Premium from the clients, allocate to the policies and remit to the underwriters with confidence and ease`,
    },
    {
      icon: 'bi-plus-slash-minus',
      title: 'Commission Request & Allocation',
      description: `Premium management cannot be complete without commission request. You can request for commission directly in the ERP`,
    },
    {
      icon: 'bi-box-seam',
      title: 'Vendor & Expense Management',
      description: `Track and control costs, streamline payments, and maintain accurate records. Enhance financial oversight and improve operational efficiency with our comprehensive solution.`,
    },

    {
      icon: 'bi-calendar-date',
      title: 'Internal Tasks Management',
      description: `Assign, track, and complete tasks efficiently, ensuring accountability and productivity. Streamline workflows and enhance team collaboration.`,
    },
    {
      icon: 'bi-activity',
      title: 'Reporting',
      description: `Access your data to see, report, and improve. As more submissions, quotes, and policies are generated, you need an aggregate view of transactions.`,
    },
  ];
}
