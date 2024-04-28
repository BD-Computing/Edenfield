import { AfterViewInit, Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
})
export class HomeComponent implements AfterViewInit {
  ngAfterViewInit(): void {
    const doc = document.getElementById('code');
    if (!doc) {
      return;
    }
    doc.innerHTML = `

  import { RiskNoteTypeEnum } from '../enums/risk-notes-types.enum';

/**
 * Return risk note type from the risk note enum
 *
 * @export
 * @param {RiskNoteTypeEnum} type
 * @return {*}  {string}
 */
export function GetRiskNoteNameHelper(type: RiskNoteTypeEnum): string {
  let riskNoteType = '';

  switch (type) {
    case RiskNoteTypeEnum.NEW:
      riskNoteType = 'New Policy Risk Note';
      break;
    case RiskNoteTypeEnum.RENEWAL:
      riskNoteType = 'Renewal Risk Note';
      break;
    case RiskNoteTypeEnum.ADDITIONAL_PREMIUM:
      riskNoteType = 'Additional Premium Endorsement Risk Note';
      break;
    case RiskNoteTypeEnum.REFUND:
      riskNoteType = 'Refund Endorsement Risk Note';
      break;
    case RiskNoteTypeEnum.COMESA:
      riskNoteType = 'Comesa Endorsement Risk Note';
      break;
    case RiskNoteTypeEnum.NIL:
      riskNoteType = 'Nil Endorsement Risk Note';
      break;
    case RiskNoteTypeEnum.LAPSE:
      riskNoteType = 'Lapsed Policy Risk Note';
      break;
    default:
      riskNoteType = 'New Policy Risk Note';
      break;
  }
  return riskNoteType;
}
`;
  }
}
