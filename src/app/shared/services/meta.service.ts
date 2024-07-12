import { Injectable } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';
import { AppName } from 'src/app/constants';

@Injectable({
  providedIn: 'root',
})
export class MetaService {
  constructor(private metaTagService: Meta, private titleService: Title) {}

  updateMetaData(payload: { title: string }) {
    const newDate = new Date();
    const date = `${
      newDate.getFullYear() - newDate.getMonth() - newDate.getDate()
    }`;
    const title = `${payload.title} - ${AppName}`;

    // update title
    this.titleService.setTitle(title);

    this.metaTagService.addTags([
      {
        name: 'description',
        content:
          'Streamline your insurance tasks with BimaTrust Workspace®, the user-friendly, robust solution by BD Computing Limited. Enhance efficiency, accuracy, and productivity with our integrated tool for client management, policy tracking, claims processing, and reporting.',
      },
      {
        name: 'keywords',
        content:
          'BimaTrust Workspace, insurance brokers, insurance software, BD Computing Limited, client management, policy tracking, claims processing, insurance reporting, productivity tools, insurance technology, integrated solutions, streamline insurance tasks, enhance efficiency, improve accuracy, boost productivity, insurance brokerage, innovative insurance tools',
      },
      { name: 'robots', content: 'index, follow' },
      { name: 'author', content: 'BD Computing Limited' },
      { name: 'viewport', content: 'width-device-width, initial-scale=1' },
      { name: 'date', content: date, scheme: 'YYYY-MM-DD' },
    ]);
  }
}
