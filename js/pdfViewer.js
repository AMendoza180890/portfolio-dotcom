//js to load PDF
        // PDF.js load and display
        const pdfViewer = document.getElementById('pdf-viewer');
        const pdfUrl = 'resource/ICalbreathPro.pdf';
        // Initialize PDF.js
        pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
            pdf.getPage(1).then(page => {
                const scale = 1.5;
                const viewport = page.getViewport({ scale });
                
                // Prepare canvas using PDF.js
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                pdfViewer.appendChild(canvas);
                
                // Render PDF on canvas
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                page.render(renderContext);
            });
        });