var smartgrid = require('smart-grid');
const settings = {
    columns: 12,
    offset: '30px',
    container: {
        maxWidth: '1280px',
        fields: '20px'
    },
    breakPoints: {
        lg: {
            width: '960px',
            fields: '20px'
        },
        md: {
            width: '870px',
            fields: '20px'
        },
        sm: {
            width: '730px',
            fields: '15px'
        },
        xs: {
			
            width: '560px',
            fields: '15px'
        },
        xxs: {
            width: '360px',
            fields: '15px'
        }

    },

    properties: [],
    oldSizeStyle: false

};
smartgrid('./resources/assets/less', settings);