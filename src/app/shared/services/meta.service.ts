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
        content: `Experience the ultimate Kenyan safari adventure with Venture Africa Safaris. Explore the best safari tours in Kenya, including Masai Mara, Amboseli, and Tsavo National Parks. Enjoy luxury and affordable safari packages, tailored family safaris, honeymoon packages, and cultural tours. Discover Kenya's stunning wildlife, beautiful beaches, and vibrant culture. Perfect for adventure seekers, bird watchers, photographers, and nature enthusiasts. Book with trusted Kenya tour operators for unbeatable safari deals. Discover Kenya's national parks and the Big Five on an unforgettable safari holiday.`,
      },
      {
        name: 'keywords',
        content:
          'Kenya Safari Tours, African Safari Holidays, Best Safari in Kenya, Kenya Wildlife Safaris, Masai Mara Safari, Kenya Tour Packages, Luxury Safari Kenya, Affordable Safaris in Kenya, Nairobi Safari Tours, Amboseli National Park Tours, Tsavo National Park Safari, Kenya Travel Guide, Kenya Beach Holidays, Kenya Adventure Tours, Kenya Cultural Tours, Kenya Honeymoon Packages, Family Safaris Kenya, Kenya Bird Watching Tours, Kenya Photography Safaris, Kenya Walking Safaris, Kenya Fly-in Safaris, Kenya Big Five Safari, Kenya Tour Operators, Kenya Safari Deals, Kenya National Parks',
      },
      { name: 'robots', content: 'index, follow' },
      { name: 'author', content: 'BD Computing Limited' },
      { name: 'viewport', content: 'width-device-width, initial-scale=1' },
      { name: 'date', content: date, scheme: 'YYYY-MM-DD' },
    ]);
  }
}
